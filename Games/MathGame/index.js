import Questions from "./Questions.js";

const canvas = document.getElementById("MathGame");
const ctx = canvas.getContext("2d");

canvas.width = 700;
canvas.height = 700;

const background = new Image();
background.src = "../../resources/MathGameBackground.png";

const wKey = new Image();
wKey.src = "./images/letter_w.png"
const aKey = new Image();
aKey.src = "./images/letter_a.png"
const sKey = new Image();
sKey.src = "./images/letter_s.png"
const dKey = new Image();
dKey.src = "./images/letter_d.png"

const greenCheckMark = new Image();
greenCheckMark.src = "./images/greenCheckMark.png"
const redX = new Image();
redX.src = "./images/redX.png"



const questions = new Questions(canvas);

//creating state variable so that people cannot skip questions.
//must be in ANSWERED state to continue.
let state = "answering";
let questionString = "";
let answer1 = "";
let answer2 = "";
let answer3 = "";
let answer4 = "";
let listOfRandomInts = [];
let correctAnswerIndex;
let streak = 0;
let pressSpaceText = "Press space to continue";


function displayText() {
    ctx.fillStyle = "black";
    ctx.font = "70px Arial";
    ctx.fillText(questionString, 230, 150);
    //w
    ctx.fillText(listOfRandomInts[0], 50, 300);
    //a
    ctx.fillText(listOfRandomInts[1], 400, 300);
    //s
    ctx.fillText(listOfRandomInts[2], 50, 550);
    //d
    ctx.fillText(listOfRandomInts[3], 400, 550);
    //streak
    ctx.font = "30px Arial";
    ctx.fillText("streak : " + streak, 50, 30);

}

function game() {
    //clears the canvas for the purpose of not drawing over itself from past questions.
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    let int1 = questions.getRandomInt(20);
    let int2 = questions.getRandomInt(20);

    questionString = int1 + " x " + int2 + " = ?";

    //placeholders for what will showup as options on screen
    while(true) {
        answer1 = questions.getRandomInt(20) * questions.getRandomInt(20);
        answer2 = questions.getRandomInt(20) * questions.getRandomInt(20);
        answer3 = questions.getRandomInt(20) * questions.getRandomInt(20);
        answer4 = questions.getRandomInt(20) * questions.getRandomInt(20);

        //makes sure that every answer option is unique and not  already the answer.
        let tempAns = [answer1, answer2, answer3, answer4, int1 * int2];
        let uniqueItems = [...new Set(tempAns)];
        if (uniqueItems.length === tempAns.length) {
            break;
        }
    }

    listOfRandomInts = [answer1, answer2, answer3, answer4];

    //change one of the options to rep the true answer, randomly.

    //get index of the num in listOfRandomInts that I want to make the correct one.
    correctAnswerIndex = listOfRandomInts.indexOf(questions.getRandomItem(listOfRandomInts));
    console.log(correctAnswerIndex);
    //make that integer in the list be the correct ans to the question.
    listOfRandomInts[correctAnswerIndex] = int1 * int2;
    console.log(listOfRandomInts);

    //draws the various images on the canvas.
    ctx.drawImage(background, 0, 0, canvas.width, canvas.height);
    ctx.drawImage(wKey, 200, 325, 50, 50);
    ctx.drawImage(aKey, 450, 325, 50, 50);
    ctx.drawImage(sKey, 200, 575, 50, 50);
    ctx.drawImage(dKey, 450, 575, 50, 50);
    displayText();
}

document.addEventListener("keypress", keypress);



// checks initially if we are in the right state for answering, 
// checks what key was pressed and sees if it corresponds with the correctAnswerIndex. 
// if it does not then display red x to notify wrong answers
function keypress(event) {
    if (state == "answering") {
        if (event.code == "KeyW") {
            if (correctAnswerIndex == 0) {
                ctx.drawImage(greenCheckMark, 265, 335, 175, 175);
                streak += 1;
            }
            else {
                ctx.drawImage(redX, 265, 335, 175, 175);
                streak = 0;
            }
            ctx.fillText(pressSpaceText, 300, 30);
            state = "answered"
        }
        if (event.code == 'KeyA') {
            if (correctAnswerIndex == 1) {
                ctx.drawImage(greenCheckMark, 265, 335, 175, 175);
                streak += 1;
            }
            else {
                ctx.drawImage(redX, 265, 335, 175, 175);
                streak = 0;
            } 
            ctx.fillText(pressSpaceText, 300, 30);
            state = "answered";
        }
        if (event.code == 'KeyS') {
            if (correctAnswerIndex == 2) {
                ctx.drawImage(greenCheckMark, 265, 335, 175, 175);
                streak += 1;
            }
            else {
                ctx.drawImage(redX, 265, 335, 175, 175);
                streak = 0;
            }
            ctx.fillText(pressSpaceText, 300, 30);
            state = "answered";
        }
        if (event.code == 'KeyD') {
            if (correctAnswerIndex == 3) {
                ctx.drawImage(greenCheckMark, 265, 335, 175, 175);
                streak += 1;
            }
            else {
                ctx.drawImage(redX, 265, 335, 175, 175);
                streak = 0;
            }
            ctx.fillText(pressSpaceText, 300, 30);
            state = "answered";
        }
    }
    if (event.code == 'Space' && state == "answered") {
        state = "answering";
        game();
    }
};

//we need to have a set timeout so the background can load properly.
setTimeout(game, 100);