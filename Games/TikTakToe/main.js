//create DOM
const canvas = document.getElementById('TicTacToe');
//set canvas area
canvas.height = 330;
canvas.width = 330;
const ctx = canvas.getContext('2d');
canvas.style.visibility = 'visible';
// space between innerWindow and canvas
let rect = document.getElementById('TicTacToe').getBoundingClientRect();
// resize window
window.addEventListener('resize', () => {
    rect = document.getElementById('TicTacToe').getBoundingClientRect();
});
// mouse events & styles
const mouse = {x: 0, y: 0};
let cursor = document.getElementById("TicTacToe");
// mouse events
document.addEventListener('mousemove', (event) => callCheckEvent(event, 'hover'));
document.addEventListener('click', (event) => callCheckEvent(event, 'click'));
// call event check function
const callCheckEvent = (event, message) => {
    mouse.x = event.clientX;
    mouse.y = event.clientY;
    // check mouse only over canvas
    if (mouse.x >= rect.left + 10 && mouse.x <= rect.right - 10
        && mouse.y >= rect.top + 10 && mouse.y <= rect.bottom - 10) {
        game.checkEvent(mouse, message);
    }
};

//setting for the table
let map = [
    0, 0, 0,
    0, 0, 0,
    0, 0, 0
]
//winning combinations
let winCombinations = [
    [ 0 , 1 , 2 ], [ 3 , 4 , 5 ],
    [ 6 , 7 , 8 ], [ 0 , 3 , 6 ],
    [ 1 , 4 , 7 ], [ 2 , 5 , 8 ],
    [ 0 , 4 , 8 ], [ 2 , 4 , 6 ]
];

//input settings
let X = 1, O = -1;
let player;
let player1, player2, AI;
let score = {player1: 0, player2: 0, AI: 0};

//game settings
function TicTacToe() {
    
}