<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/login.php");
echo <<<EOT
<!DOCTYPE html>
<html>
<head>
	<title>TimboTronics</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Cambo&display=swap');
		.header{
			margin-top:10%;
			text-align: center;
			background-color: white;
			display: inline-block;
			padding: 50px;
			border-radius: 10px;
		}
		.outer{
			  width:100%;
			  display: flex;
			  justify-content: center
		}
		h1, h3, p{
			font-family: 'Times New Roman', serif;
		}
		p{
			font-size:24px;
		}
		.list {
			display: inline-block;
			width:100%;
			display: flex;
			justify-content: center
		}
		ul {
			text-align: left;
		}
		body{
			background: url(/resources/Paige.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
</head>
<body>
	<div class = 'outer'>
		<div class = 'header'>
			<div class = 'list'>
				<form action = "/gameRankings/submitRanking.php" method = post>
				    <select name="game" placeholder = "Game">
                        <option value="A Good Snowman Is Hard To Build">A Good Snowman Is Hard To Build</option>
                        <option value="A Mortician's Tale">A Mortician's Tale</option>
                        <option value="AdVenture Capitalist">AdVenture Capitalist</option>
                        <option value="Agents of Mayhem">Agents of Mayhem</option>
                        <option value="Aim Lab">Aim Lab</option>
                        <option value="Alien Spidy">Alien Spidy</option>
                        <option value="Alien: Isolation">Alien: Isolation</option>
                        <option value="Amnesia: A Machine for Pigs">Amnesia: A Machine for Pigs</option>
                        <option value="Amnesia: The Dark Descent">Amnesia: The Dark Descent</option>
                        <option value="Among Us">Among Us</option>
                        <option value="Apex Legends">Apex Legends</option>
                        <option value="ARK: Survival Evolved">ARK: Survival Evolved</option>
                        <option value="Back 4 Blood">Back 4 Blood</option>
                        <option value="Batman: Arkham Knight">Batman: Arkham Knight</option>
                        <option value="Battlefield 2042 Open Beta">Battlefield 2042 Open Beta</option>
                        <option value="Battlefield: Bad Company 2">Battlefield: Bad Company 2</option>
                        <option value="Battlefield 2042 Open Beta">Battlefield 2042 Open Beta</option>
                        <option value="Beat Saber">Beat Saber</option>
                        <option value="Besiege">Besiege</option>
                        <option value="Bigscreen Beta">Bigscreen Beta</option>
                        <option value="BioShock Infinite">BioShock Infinite</option>
                        <option value="Blade & Sorcery">Blade & Sorcery</option>
                        <option value="Bloons TD 6">Bloons TD 6</option>
                        <option value="Borderlands 2">Borderlands 2</option>
                        <option value="Borderlands: The Pre-Sequel">Borderlands: The Pre-Sequel</option>
                        <option value="Broken Age">Broken Age</option>
                        <option value="Brothers - A Tale of Two Sons">Brothers - A Tale of Two Sons</option>
                        <option value="Brütal Legend">Brütal Legend</option>
                        <option value="Call of Duty 4: Modern Warfare">Call of Duty 4: Modern Warfare</option>
                        <option value="Call of Duty: Black Ops">Call of Duty: Black Ops</option>
                        <option value="Call of Duty: Modern Warfare 2">Call of Duty: Modern Warfare 2</option>
                        <option value="Call of Duty: Modern Warfare 3">Call of Duty: Modern Warfare 3</option>
                        <option value="Call of Duty: World at War">Call of Duty: World at War</option>
                        <option value="Capitalism 2">Capitalism 2</option>
                        <option value="Capitalism Plus">Capitalism Plus</option>
                        <option value="Cities: Skylines">Cities: Skylines</option>
                        <option value="Counter-Strike: Global Offensive">Counter-Strike: Global Offensive</option>
                        <option value="Crusader Kings III">Crusader Kings III</option>
                        <option value="Cyberpunk 2077">Cyberpunk 2077</option>
                        <option value="Darkest Dungeon">Darkest Dungeon</option>
                        <option value="Darksiders">Darksiders</option>
                        <option value="Darksiders II Deathinitive Edition">Darksiders II Deathinitive Edition</option>
                        <option value="Darksiders Warmastered Edition">Darksiders Warmastered Edition</option>
                        <option value="Dawn of Man">Dawn of Man</option>
                        <option value="Dead by Daylight">Dead by Daylight</option>
                        <option value="Destiny 2">Destiny 2</option>
                        <option value="Dicey Dungeons">Dicey Dungeons</option>
                        <option value="Dishonored">Dishonored</option>
                        <option value="Dishonored 2">Dishonored 2</option>
                        <option value="DOOM">DOOM</option>
                        <option value="DOOM Eternal">DOOM Eternal</option>
                        <option value="DUCATI - 90th Anniversary">DUCATI - 90th Anniversary</option>
                        <option value="Dying Light">Dying Light</option>
                        <option value="Euro Truck Simulator 2">Euro Truck Simulator 2</option>
                        <option value="Europa Universalis IV">Europa Universalis IV</option>
                        <option value="Evolve Stage 2">Evolve Stage 2</option>
                        <option value="Fahrenheit: Indigo Prophecy Remastered">Fahrenheit: Indigo Prophecy Remastered</option>
                        <option value="Fallout 4">Fallout 4</option>
                        <option value="Far Cry 4">Far Cry 4</option>
                        <option value="Far Cry 5">Far Cry 5</option>
                        <option value="Frostpunk">Frostpunk</option>
                        <option value="Garry's Mod">Garry's Mod</option>
                        <option value="GNOG">GNOG</option>
                        <option value="Grand Theft Auto IV">Grand Theft Auto IV</option>
                        <option value="Grand Theft Auto V">Grand Theft Auto V</option>
                        <option value="Hacknet">Hacknet</option>
                        <option value="Hades">Hades</option>
                        <option value="Halo: The Master Chief Collection">Halo: The Master Chief Collection</option>
                        <option value="Hearts of Iron IV">Hearts of Iron IV</option>
                        <option value="Hitman: Absolution">Hitman: Absolution</option>
                        <option value="Hitman: Sniper Challenge">Hitman: Sniper Challenge</option>
                        <option value="HIVESWAP: ACT 1">HIVESWAP: ACT 1</option>
                        <option value="Hollow Knight">Hollow Knight</option>
                        <option value="Horizon Zero Dawn">Horizon Zero Dawn</option>
                        <option value="Into the Breach">Into the Breach</option>
                        <option value="Jazzpunk: Director's Cut">Jazzpunk: Director's Cut</option>
                        <option value="Just Cause 3">Just Cause 3</option>
                        <option value="Kerbal Space Program">Kerbal Space Program</option>
                        <option value="Killing Floor 2">Killing Floor 2</option>
                        <option value="Left 4 Dead">Left 4 Dead</option>
                        <option value="Left 4 Dead 2">Left 4 Dead 2</option>
                        <option value="LEGO Batman 3: Beyond Gotham">LEGO Batman 3: Beyond Gotham</option>
                        <option value="LEGO Harry Potter: Years 1-4">LEGO Harry Potter: Years 1-4</option>
                        <option value="LEGO MARVEL Super Heroes">LEGO MARVEL Super Heroes</option>
                        <option value="LEGO The Lord of the Rings">LEGO The Lord of the Rings</option>
                        <option value="Little Nightmares">Little Nightmares</option>
                        <option value="LostWinds">LostWinds</option>
                        <option value="Lunch Lady">Lunch Lady</option>
                        <option value="Magicka">Magicka</option>
                        <option value="Medieval II: Total War Kingdoms">Medieval II: Total War Kingdoms</option>
                        <option value="METAL GEAR SOLID V: THE PHANTOM PAIN">METAL GEAR SOLID V: THE PHANTOM PAIN</option>
                        <option value="Metro Exodus">Metro Exodus</option>
                        <option value="No Man's Sky">No Man's Sky</option>
                        <option value="No More Room in Hell">No More Room in Hell</option>
                        <option value="Old School RuneScape">Old School RuneScape</option>
                        <option value="Pacify">Pacify</option>
                        <option value="PAC-MAN CHAMPIONSHIP EDITION 2">PAC-MAN CHAMPIONSHIP EDITION 2</option>
                        <option value="Paladins">Paladins</option>
                        <option value="Papers, Please">Papers, Please</option>
                        <option value="Party Hard">Party Hard</option>
                        <option value="Pavlov VR">Pavlov VR</option>
                        <option value="PAYDAY 2">PAYDAY 2</option>
                        <option value="Peggle Deluxe">Peggle Deluxe</option>
                        <option value="Perfect Vermin">Perfect Vermin</option>
                        <option value="Personal Game Data">Personal Game Data</option>
                        <option value="Phasmophobia">Phasmophobia</option>
                        <option value="Pikuniku">Pikuniku</option>
                        <option value="Portal 2">Portal 2</option>
                        <option value="Prison Architect">Prison Architect</option>
                        <option value="Project Zomboid">Project Zomboid</option>
                        <option value="Psychonauts">Psychonauts</option>
                        <option value="Psychonauts Demo">Psychonauts Demo</option>
                        <option value="PUBG: BATTLEGROUNDS">PUBG: BATTLEGROUNDS</option>
                        <option value="Rebuild 3: Gangs of Deadsville">Rebuild 3: Gangs of Deadsville</option>
                        <option value="Red Dead Online">Red Dead Online</option>
                        <option value="Resident Evil 4">Resident Evil 4</option>
                        <option value="Resident Evil 5">Resident Evil 5</option>
                        <option value="Resident Evil 7 Biohazard">Resident Evil 7 Biohazard</option>
                        <option value="RimWorld">RimWorld</option>
                        <option value="Risk of Rain 2">Risk of Rain 2</option>
                        <option value="Rome: Total War">Rome: Total War</option>
                        <option value="Rust">Rust</option>
                        <option value="Satisfactory">Satisfactory</option>
                        <option value="Sekiro: Shadows Die Twice">Sekiro: Shadows Die Twice</option>
                        <option value="ShellShock Live">ShellShock Live</option>
                        <option value="Shotgun Farmers">Shotgun Farmers</option>
                        <option value="Sid Meier's Civilization IV">Sid Meier's Civilization IV</option>
                        <option value="Sid Meier's Civilization V">Sid Meier's Civilization V</option>
                        <option value="Sid Meier's Civilization VI">Sid Meier's Civilization VI</option>
                        <option value="Slay the Spire">Slay the Spire</option>
                        <option value="Sniper Elite 3">Sniper Elite 3</option>
                        <option value="Speed Brawl">Speed Brawl</option>
                        <option value="Splitgate">Splitgate</option>
                        <option value="Sprout">Sprout</option>
                        <option value="Star Wars: Battlefront 2 (Classic, 2005)">Star Wars: Battlefront 2 (Classic, 2005)</option>
                        <option value="Stardew Valley">Stardew Valley</option>
                        <option value="Stealth Inc 2">Stealth Inc 2</option>
                        <option value="Stick Fight: The Game">Stick Fight: The Game</option>
                        <option value="Subnautica">Subnautica</option>
                        <option value="Super Auto Pets">Super Auto Pets</option>
                        <option value="Super Hexagon">Super Hexagon</option>
                        <option value="SUPERHOT">SUPERHOT</option>
                        <option value="Tabletop Simulator">Tabletop Simulator</option>
                        <option value="Team Fortress 2">Team Fortress 2</option>
                        <option value="Teardown">Teardown</option>
                        <option value="Terraria">Terraria</option>
                        <option value="The Binding of Isaac: Afterbirth+">The Binding of Isaac: Afterbirth+</option>
                        <option value="The Binding of Isaac: Rebirth">The Binding of Isaac: Rebirth</option>
                        <option value="The Elder Scrolls III: Morrowind">The Elder Scrolls III: Morrowind</option>
                        <option value="The Elder Scrolls IV: Oblivion">The Elder Scrolls IV: Oblivion</option>
                        <option value="The Elder Scrolls V: Skyrim">The Elder Scrolls V: Skyrim</option>
                        <option value="The Forest">The Forest</option>
                        <option value="The Jackbox Party Pack 2">The Jackbox Party Pack 2</option>
                        <option value="The Legend of Bum-Bo">The Legend of Bum-Bo</option>
                        <option value="The Sims(TM) 3">The Sims(TM) 3</option>
                        <option value="The Stanley Parable">The Stanley Parable</option>
                        <option value="The Witcher 3: Wild Hunt">The Witcher 3: Wild Hunt</option>
                        <option value="The Witness">The Witness</option>
                        <option value="This Is the Police">This Is the Police</option>
                        <option value="Tilt Brush">Tilt Brush</option>
                        <option value="Tom Clancy's Rainbow Six Siege">Tom Clancy's Rainbow Six Siege</option>
                        <option value="Total War: EMPIRE - Definitive Edition">Total War: EMPIRE - Definitive Edition</option>
                        <option value="Total War: MEDIEVAL II - Definitive Edition">Total War: MEDIEVAL II - Definitive Edition</option>
                        <option value="Total War: NAPOLEON - Definitive Edition">Total War: NAPOLEON - Definitive Edition</option>
                        <option value="Total War: ROME II - Emperor Edition">Total War: ROME II - Emperor Edition</option>
                        <option value="Total War: SHOGUN 2">Total War: SHOGUN 2</option>
                        <option value="Total War: THREE KINGDOMS">Total War: THREE KINGDOMS</option>
                        <option value="Total War: WARHAMMER II">Total War: WARHAMMER II</option>
                        <option value="Totally Accurate Battle Simulator">Totally Accurate Battle Simulator</option>
                        <option value="Tropico 4">Tropico 4</option>
                        <option value="Tropico 5">Tropico 5</option>
                        <option value="TY the Tasmanian Tiger">TY the Tasmanian Tiger</option>
                        <option value="Ultimate Epic Battle Simulator">Ultimate Epic Battle Simulator</option>
                        <option value="Undertale">Undertale</option>
                        <option value="Universe Sandbox">Universe Sandbox</option>
                        <option value="Unturned">Unturned</option>
                        <option value="Unturned - Early Access">Unturned - Early Access</option>
                        <option value="VRChat">VRChat</option>
                        <option value="VVVVVV">VVVVVV</option>
                        <option value="Wallpaper Engine">Wallpaper Engine</option>
                        <option value="War Thunder">War Thunder</option>
                        <option value="War Trigger 3">War Trigger 3</option>
                        <option value="Wargame: European Escalation">Wargame: European Escalation</option>
                        <option value="Wizard of Legend">Wizard of Legend</option>
                        <option value="Wolfenstein II: The New Colossus">Wolfenstein II: The New Colossus</option>
                        <option value="World of Goo">World of Goo</option>
                        <option value="Worms Revolution">Worms Revolution</option>
                        <option value="X4: Foundations">X4: Foundations</option>
                        <option value="Z1 Battle Royale">Z1 Battle Royale</option>
                        <option value="Zombie Army Trilogy">Zombie Army Trilogy</option>
                        <option value="Zombotron">Zombotron</option>
                    </select>
				    <input name="score" placeholder="Score">
				    <input type="submit" type="submit" value="Submit" class="btn-login"/>
                </form>
			</div>
		</div>
	</div>
</body>
</html>
EOT;
