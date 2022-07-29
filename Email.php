<?php

class Email {

	private static $config;

	public static function setConfig($key, $value){
		self::$config[$key] = $value;
	}

	public static function setConfigArray($config){
		$defaults = array(
			'to' => null,
			'cc' => null,
			'bcc' => null,
			'headers' => null,
			'from' => 'Timbotronics.xyz',
			'replyTo' => null,
			'fromEmail' => 'no-reply@timbotronics.xyz',
			'subject' => 'subject',
			'message' => 'message',
			'showSourceFooter' => true,
			'attachment' => null,
			'attachmentName' => null,
			'attachmentType' => 'application/octet-stream'
		);
		self::$config = $config;
		foreach($defaults as $key => $default){
			if(!isset(self::$config[$key])){
				self::$config[$key] = $default;
			}
		}
	}

	public static function send($config = null){
		if($config !== null){
			self::setConfigArray($config);
		}
		
		//do we have the minimum configs to send an email?
		if(self::$config['to'] === null || self::$config['message'] === null){
			$ex = new Exception("Invalid config for sending email! Missing 'to' or 'message'");
			$ex->exceptionData = self::$config;
			throw $ex;
		}
		if(self::$config['attachment'] !== null && self::$config['attachmentName'] === null) {
			$ex = new Exception("attachmentName cannot be blank if you are sending attachment");
		}

		self::implodeIfArray(self::$config['to'], ",");
		self::implodeIfArray(self::$config['cc'], ",");
		self::implodeIfArray(self::$config['bcc'], ",");

		if (self::$config['headers'] === null) {
			self::$config['headers'] = self::generateHeaders();
		}

		self::implodeIfArray(self::$config['message'], "\r\n");

		if(true === self::$config['showSourceFooter']){
			//call debug_backtrace here so we can get the line send() was called from
			$debugBacktrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT ,2);
			if(isset(self::$config['debugBacktrace'])){
				$debugBacktrace = self::$config['debugBacktrace'];
			}
			self::$config['message'] .= self::generateDebugFooter($debugBacktrace);
		}

		if(NULL !== self::$config['attachment']){

			if(!is_array(self::$config['attachment'])) {
				self::$config['attachment'] = [
					[
						'attachment' => self::$config['attachment'],
						'attachmentName' => self::$config['attachmentName'],
						'attachmentType' => self::$config['attachmentType']
					]
				];
			}

			self::$config['message'] = "--".self::getBoundary()."\r\n".
			"Content-Type: text/html;\r\n".
			" charset=\"us-ascii\"\r\n".
			"Content-Transfer-Encoding: base64\r\n".
			"\r\n".
			wordwrap(base64_encode(self::$config['message']), 77, "\r\n", true)."\r\n";

			foreach (self::$config['attachment'] as $attachment) {

				if(!isset($attachment['attachmentType'])) {
					$attachment['attachmentType'] = 'application/octet-stream';
				}

				self::$config['message'] .= "--".self::getBoundary()."\r\n".
				"Content-Type: ".$attachment['attachmentType'].";\r\n".
				" name=\"".$attachment['attachmentName']."\"\r\n".
				"Content-Transfer-Encoding: base64\r\n".
				"Content-Disposition: attachment;\r\n".
				" filename=\"".$attachment['attachmentName']."\"\r\n".
				"\r\n".
				wordwrap(base64_encode($attachment['attachment']), 77, "\r\n", true)."\r\n";
			}
			self::$config['message'] .="--".self::getBoundary() . "--\r\n";
		}



        require_once '/Server/Data/ApacheData/timbotronics.xyz/SendGrid/sendgrid-php.php';
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom(self::$config['fromEmail'], self::$config['from']);
        $email->setSubject(self::$config['subject']);
        if(self::$config['to']) {
            self::$config['to'] = explode(",", self::$config['to']);
            if(count(self::$config['to']) === 1) {
                $email->addTo(self::$config['to'][0]);
            } else {
                $tos = [];
                foreach(self::$config['to'] as $to) {
                    $tos[] = [$to, $to];
                }
                $email->addTos($tos);
            }
        }

        if(self::$config['cc']) {
            self::$config['cc'] = explode(",", self::$config['cc']);
            if(count(self::$config['cc']) === 1) {
                $email->addCc(self::$config['cc'][0]);
            } else {
                $ccs = [];
                foreach(self::$config['cc'] as $cc) {
                    $ccs[] = [$cc, $cc];
                }
                $email->addCcs($ccs);
            }
        }

        if(self::$config['bcc']) {
            self::$config['bcc'] = explode(",", self::$config['bcc']);
            if(count(self::$config['bcc']) === 1) {
                $email->addBcc(self::$config['bcc'][0]);
            } else {
                $bccs = [];
                foreach(self::$config['bcc'] as $bcc) {
                    $bccs[] = [$bcc, $bcc];
                }
                $email->addBccs($bccs);
            }
        }

        $email->addContent("text/html", self::$config['message']);
        $password = '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';

        $sendgrid = new \SendGrid($password);
        try {
            //echo "<pre>";print_r($sendgrid->send($email));
            $sendgrid->send($email);
        } catch (Exception $e) {
            throw $e;
        }
	}

	private static function implodeIfArray(&$stringOrArray, $separator){
		if(is_array($stringOrArray)) {
			$stringOrArray = implode($separator, $stringOrArray);
		}
	}

	private static function generateHeaders(){
		$headers = array();
		$headers[] = "From: ".self::$config['from']." <".self::$config['fromEmail'].">";
		if(self::$config['cc'] !== null && trim(self::$config['cc']) !== ''){
			$headers[] = "Cc: ".self::$config['cc'];
		}
		if(self::$config['bcc'] !== null && trim(self::$config['bcc']) !== ''){
			$headers[] = "Bcc: ".self::$config['bcc'];
		}
		if(self::$config['replyTo'] !== null && trim(self::$config['replyTo']) !== ''){
			$headers[] = "Reply-To: ".self::$config['replyTo'];
		}
		$headers[] = "MIME-Version: 1.0";
		if(NULL !== self::$config['attachment']){
			$headers[] = "Content-Type: multipart/mixed;";
			$headers[] = ' boundary="'.self::getBoundary().'"';
		}else{
			$headers[] = "Content-Type: text/html; charset=ISO-8859-1";
		}
		return implode("\r\n", $headers);
	}

	private static function generateDebugFooter($backtrace){

		$backtraceStr = '';
		if(isset($backtrace[1])){
			if( isset($backtrace[1]['class']) ){
				$backtraceStr .= ' '.$backtrace[1]['class'];
			}elseif( isset($backtrace[1]['file']) ){
				$backtraceStr .= ' '.$backtrace[1]['file'];
			}
			if(isset($backtrace[1]['function'])){
				$backtraceStr .= '/'.$backtrace[1]['function'];
			}
		}
		if(isset($backtrace[0]) && isset($backtrace[0]['line'])){
			$backtraceStr .= ':'.$backtrace[0]['line'];
		}

		return "<BR/>\r\n<BR/>\r\nSent at ".date('Y-m-d g:ia').' from '.$_SERVER['SERVER_NAME']."<BR\>\r\n<span style=\"color:#BBB\">{$backtraceStr}</span>";
	}

	private static function getBoundary(){
		if(!isset(self::$config['boundary'])){
			return self::$config['boundary'] = "----PART_" . md5(microtime());
		}
		return self::$config['boundary'];
	}

}