/*const quizData = [
    {
        question: "Question 1",
        a: "a",
        b: "b",
        c: "c",
        d: "d",
        correct: "d",
    },
    {
        question: "Question 2",
        a: "a",
        b: "b",
        c: "c",
        d: "d",
        correct: "b",
    },
    {
        question: "Question 3",
        a: "a",
        b: "b",
        c: "c",
        d: "d",
        correct: "a",
    },
    {
        question: "Question 4",
        a: "a",
        b: "b",
        c: "c",
        d: "d",
        correct: "b",
    },
];*/

function getRandomInt(max) {
    return Math.floor(Math.random() * max) + 1;
  }

const quizData = [];
const binaryOptions = [];

let currentQuestion = 0;

const quiz = document.getElementById('quiz');
const answerEls = document.querySelectorAll('.answer');
const questionEl = document.getElementById('question');
const aBtn = document.getElementById('a-btn');
const bBtn = document.getElementById('b-btn');
const cBtn = document.getElementById('c-btn');
const dBtn = document.getElementById('d-btn');
const aText = document.getElementById('a_text');
const bText = document.getElementById('b_text');
const cText = document.getElementById('c_text');
const dText = document.getElementById('d_text');
const submitBtn = document.getElementById('submit');

let currentQuiz = 0;
let score = 0;
const questionCount = 10;

function addBinaryQuestion(){
    // Loops 4 times to add 4 questions
    for(x = 0; x < questionCount; x++){

        // Pushes 4 random binary numbers to the binaryOptions array
        for(i = 0; i < questionCount; i++){
            do{
                randomNumber = getRandomInt(1000);
                binary = randomNumber.toString(2);
                if(binary.length === 1) binary = "00000" + binary;
                if(binary.length === 2) binary = "0000" + binary;
                if(binary.length === 3) binary = "000" + binary;
                if(binary.length === 4) binary = "00" + binary;
                if(binary.length === 5) binary = "0" + binary; 
                if(binaryOptions.includes(binary) === false) binaryOptions.push(binary);
            }while(binaryOptions.includes(binary) === false || isNaN(binary));
           
        }

        // Shuffles the array
        shuffle(binaryOptions);

        let first, second, third, fourth;
        first = getRandomInt(questionCount) - 1;

        second = getRandomInt(questionCount) - 1;

        while(second == first){
            second = getRandomInt(questionCount) - 1;
        }
        third = getRandomInt(questionCount) - 1;

        while(third == first || third == second){
            third = getRandomInt(questionCount) - 1;
        }

        fourth = getRandomInt(questionCount) - 1;

        while(fourth == first || fourth == second || fourth == third){
            fourth = getRandomInt(questionCount) - 1;
        }
        
        let correct = getRandomInt(questionCount) - 1;

        quizData.push({
            question: "Convert " + parseInt(binaryOptions[correct], 2) + " to binary",
            a: binaryOptions[first],
            b: binaryOptions[second],
            c: binaryOptions[third],
            d: binaryOptions[fourth],
            correct: binaryOptions[correct],
        });

    }
    
}

addBinaryQuestion();
console.log(quizData);

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

shuffle(quizData);

loadQuiz();

function loadQuiz() {
    deselectAnswers();
    const currentQuizData = quizData[currentQuiz];
    questionEl.innerText = currentQuizData.question;
    aText.innerText = currentQuizData.a;
    bText.innerText = currentQuizData.b;
    cText.innerText = currentQuizData.c;
    dText.innerText = currentQuizData.d;
}

function deselectAnswers() {
    aBtn.classList.remove('selected');
    bBtn.classList.remove('selected');
    cBtn.classList.remove('selected');
    dBtn.classList.remove('selected');
}
    
function getSelected() {
    let answer = null;
    if (aBtn.classList.contains('selected')) {
    answer = quizData[currentQuestion - 1].a;
    } else if (bBtn.classList.contains('selected')) {
    answer = quizData[currentQuestion - 1].b;
    } else if (cBtn.classList.contains('selected')) {
    answer = quizData[currentQuestion - 1].c;
    } else if (dBtn.classList.contains('selected')) {
    answer = quizData[currentQuestion - 1].d;
    }
    console.log(quizData)
    return answer === quizData[currentQuiz].correct;
}

const answerButtons = document.querySelectorAll('.answer');

answerButtons.forEach(button => {
    button.addEventListener('click', () => {
        deselectAnswers();
        button.classList.add('selected');
        currentQuestion++;
        console.log(getSelected()); // add this line
        if (getSelected()) {
            score++;
        }
        currentQuiz++;
        if (currentQuiz < quizData.length) {
            loadQuiz();
        } else {
            localStorage.setItem("score", score);
            window.location.href = "../results/";
        }
    });
});