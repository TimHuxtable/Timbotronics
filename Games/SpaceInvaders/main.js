import AlienController from "./alienController.js";
import Player from "./Player.js";
import BulletController from "./BulletController.js";

const canvas = document.getElementById("SpaceInvaders");
const ctx = canvas.getContext("2d");

canvas.width = 600;
canvas.height = 600;

const background = new Image();
background.src = "../../resources/SpaceInvaders.jpg"

//this lets you choose what color bullets are and how many can be on screen at once.
const playerBulletController = new BulletController(canvas, 5, "red", true);
const enemyBulletController = new BulletController(canvas, 10, "yellow", false);
const alienController = new AlienController(
    canvas,
    enemyBulletController,
    playerBulletController
);
const player = new Player(canvas, 3, playerBulletController);

let isGameOver = false;
let didWin = false;

function game() {
    checkGameover();
    //draws background image on canvas starting from topleft corner.
    ctx.drawImage(background, 0, 0, canvas.width, canvas.height);
    displayGameOver();
    if (!isGameOver) {
        alienController.draw(ctx);
        player.draw(ctx);
        playerBulletController.draw(ctx);
        enemyBulletController.draw(ctx);
    }
}

function displayGameOver() {
    if (isGameOver) {
        let text = didWin ? "You Win" : "Game Over";
        let textOffset = didWin ? 3.5 : 5;
    
        ctx.fillStyle = "white";
        ctx.font = "70px Arial";
        ctx.fillText(text, canvas.width / textOffset, canvas.height / 2);
      }
}

function checkGameover() {
    if (isGameOver) {
        return;
    }

    if (enemyBulletController.collideWith(player)) {
        isGameOver = true;
    }

    if (alienController.collideWith(player)) {
        isGameOver = true;
    }

    if (alienController.enemyRows.length === 0) {
        didWin = true;
        isGameOver = true;
    }
}

setInterval(game, 1000/60);