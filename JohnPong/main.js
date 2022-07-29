let canvas = document.getElementById("canvas");
let context = canvas.getContext("2d");

let userScore = 0;
let cpuScore = 0;

let controls = {
	up:true,
	down:true
};

let ball;
let userPaddle;
let cpuPaddle;

reset();

function updateCanvas() {
	context.beginPath();
	context.clearRect(0, 0, canvas.width, canvas.height);
	context.fillStyle = ball.color;
	ball.update();
	context.fill();
	context.beginPath();
	context.fillStyle = "black";
	userPaddle.update();
	cpuPaddle.update();
	context.fill();
	context.font = "30px Arial";
	context.fillText("User: " + userScore, canvas.width / 3 - 50, 50);
	context.fillText("Speed: " + ball.speed, canvas.width / 2 - 50, 50);
	context.fillText("Cpu: " + cpuScore, canvas.width * 2 / 3 - 50, 50);
	window.requestAnimationFrame(updateCanvas);
}

function reset() {
	ball = {
		x:canvas.width / 2,
		y:canvas.height / 2,
		radius:25,
		speed:7,
		direction:Math.random() * 360,
		color:"#000000",
		update:function() {
			if(this.x - this.radius < 0) {
				cpuScore++;
				reset();
			}

			if(this.x + this.radius >= canvas.width) {
				userScore++;
				reset();
			}

			if(this.x - this.radius <=  userPaddle.x + userPaddle.width && this.y - this.radius > userPaddle.y && this.y + this.radius < userPaddle.y + userPaddle.height) {
				this.direction = 180 - this.direction;
				if(Math.random() > .5) {
					this.speed++;
				}
			}

			if(this.x + this.radius >= cpuPaddle.x && this.y - this.radius > cpuPaddle.y && this.y + this.radius < cpuPaddle.y + cpuPaddle.height) {
				this.direction = 180 - this.direction;
				if(Math.random() > .5) {
					this.speed++;
				}
			}

			if(this.y - this.radius <= 0 || this.y + this.radius >= canvas.height) {
				this.direction = 360 - this.direction;
			}

			this.x += this.speed * Math.cos(this.direction * Math.PI / 180);
			this.y -= this.speed * Math.sin(this.direction * Math.PI / 180);
			context.ellipse(ball.x, ball.y, ball.radius % 100, ball.radius % 100, 0, 0, Math.PI * 2);
		}
	};

	userPaddle = {
		x:10,
		y:canvas.height / 2 - canvas.height / 3 / 2,
		width:10,
		height:canvas.height / 5,
		speed:10,
		update:function() {
			//User Control
			if(controls.up && this.y >= 0) {
				this.y -= this.speed;
			}

			if(controls.down && this.y + this.height < canvas.height) {
				this.y += this.speed;
			}

			//Cpu Control
			// if(ball.y < this.y + this.height / 2 && this.y >= 0) {
			// 	this.y -= this.speed;
			// }
			//
			// if(ball.y > this.y + this.height / 2 && this.y + this.height < canvas.height) {
			// 	this.y += this.speed;
			// }

			context.fillRect(this.x, this.y, this.width, this.height);
		}
	}

	cpuPaddle = {
		x:canvas.width - 20,
		y:canvas.height / 2 - canvas.height / 3 / 2,
		width:10,
		height:canvas.height / 5,
		speed:10,
		update:function() {
			if(ball.y < this.y + this.height / 2 && this.y >= 0) {
				this.y -= this.speed;
			}

			if(ball.y > this.y + this.height / 2 && this.y + this.height < canvas.height) {
				this.y += this.speed;
			}

			context.fillRect(this.x, this.y, this.width, this.height);
		}
	}
}

document.addEventListener("keydown", function(event) {
	if(event.key === "ArrowUp") {
		controls.down = false;
	}

	if(event.key === "ArrowDown") {
		controls.up = false;
	}
});

document.addEventListener("keyup", function(event) {
	if(event.key === "ArrowUp") {
		controls.down = true;
	}

	if(event.key === "ArrowDown") {
		controls.up = true;
	}
});

updateCanvas();