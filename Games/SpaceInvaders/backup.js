//Setting DOM
let canvas = document.getElementById('canvas');
let context = canvas.getContext('2d');

//key codes
let arrow_left = 37;
let arrow_right = 39;
let space = 32;
//let arrow_up = 38;
//let arrow_down = 40;

//keep track of what keys are pressed
let keys = {
    arrow_left: false,
    arrow_right: false,
    space: false
};

// Create a rectangle object - for player and aliens.
function makeRect(x, y, width, height, speed, color) {
    if (!color) color = '#000000';
    return {
        x: x,
        y: y,
        w: width,
        h: height,
        s: speed,
        c: color,
        draw: function() {
            context.fillStyle = this.c;
            context.fillRect(this.x, this.y, this.w, this.h);
        }
    };
}

//create the player
let ship_width = 25;
let ship_height = 25;
let player = makeRect(canvas.width / 2, canvas.height - ship_height, ship_width, ship_height, 8, '#BC0000');

//create aliens(s)
let alien_width = 20;
let alien_height = 5;
let alien = makeRect(canvas.width / 2, alien_height * 2, alien_width, alien_height, 5,'#00ff00')

//score
let score = 0;

// Listen for keydown events
document.addEventListener('keydown', function(e) {
    console.log(e);
    if (e.code === 'Space') {
        keys.space = true;
    }
    if (e.code === 'ArrowRight') {
        keys.arrow_right = true;
    }
    if (e.code === 'ArrowLeft') {
        keys.arrow_left = true;
    }
});

// Listen for keyup events
document.addEventListener('keyup', function(e) {
    if (e.code === 'Space') {
        keys.space = false;
    }
    if (e.code === 'ArrowLeft') {
        keys.arrow_left = false;
    }
    if (e.code === 'ArrowRight') {
        keys.arrow_right = false;
    }
});

function menu() {
    erase();
    // Show the menu
    context.fillStyle = '#000000';
    context.font = '24px Arial';
    context.textAlign = 'center';
    context.fillText('Space Invaders', canvas.width / 2, canvas.height / 4);
    context.font = '18px Arial';
    context.fillText('Click to Start', canvas.width / 2, canvas.height / 3);
    context.font = '14px Arial';
    context.textAlign = 'center';
    context.fillText('Player: <- (left) and -> (right)', 5, (canvas.height / 3) * 2);
    // Start the game on a click
    canvas.addEventListener('click', startGame);
}

// Clear the canvas
function erase() {
    context.clearRect(0, 0, canvas.width, canvas.height);
}

// Start the game
function startGame() {
    // Don't accept any more clicks
    canvas.removeEventListener('click', startGame);
    // Put the ball in place
    resetBall();
    // Kick off the game loop
    draw();
}

// Main draw loop
function draw() {
    erase();
    // Move the player
    if (keys.arrow_left) {
        player.x -= player.s;
    }
    if (keys.arrow_right) {
        player.x += player.s;
    }//NEED TO MAKE THIS SHOOT
    if (keys.space) {
        rightPaddle.y -= rightPaddle.s;
    }
    // Move the ball
    ball.x += ball.sX;
    ball.y += ball.sY;
    // Bounce the ball off the top/bottom
    if (ball.y < 0 || ball.y + ball.h > canvas.height) {
        ball.sY *= -1;
    }
    // Don't let the paddles go off-screen
    [leftPaddle, rightPaddle].forEach(function(paddle) {
        if (paddle.y < 0) {
            paddle.y = 0;
        }
        if (paddle.y + paddle.h > canvas.height) {
            paddle.y = canvas.height - paddle.h;
        }
    });
    // Bounce the ball off the paddles
    if (ball.y + ball.h/2 >= leftPaddle.y && ball.y + ball.h/2 <= leftPaddle.y + leftPaddle.h) {
        if (ball.x <= leftPaddle.x + leftPaddle.w) {
            bounceBall();
        }
    }
    if (ball.y + ball.h/2 >= rightPaddle.y && ball.y + ball.h/2 <= rightPaddle.y + rightPaddle.h) {
        if (ball.x + ball.h >= rightPaddle.x) {
            bounceBall();
        }
    }
    // Score if the ball goes past a paddle
    if (ball.x < leftPaddle.x) {
        rightScore++;
        resetBall();
        ball.sX *= -1;
    } else if (ball.x + ball.h > rightPaddle.x + rightPaddle.w) {
        leftScore++;
        resetBall();
        ball.sX *= -1;
    }
    // Draw the paddles and ball
    leftPaddle.draw();
    rightPaddle.draw();
    ball.draw();
    // Draw the scores
    context.fillStyle = '#000000';
    context.font = '24px Arial';
    context.textAlign = 'left';
    context.fillText('Score: ' + leftScore, 5, 24);
    context.textAlign = 'right';
    context.fillText('Score: ' + rightScore, canvas.width - 5, 24);
    // End the game or keep going
    if (leftScore === 10 || rightScore === 10) {
        endGame();
    } else {
        window.requestAnimationFrame(draw);
    }
}
