const quizData = [
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
];

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
    answer = 'a';
    } else if (bBtn.classList.contains('selected')) {
    answer = 'b';
    } else if (cBtn.classList.contains('selected')) {
    answer = 'c';
    } else if (dBtn.classList.contains('selected')) {
    answer = 'd';
    }
    return answer === quizData[currentQuiz].correct;
}

const answerButtons = document.querySelectorAll('.answer');

answerButtons.forEach(button => {
    button.addEventListener('click', () => {
    deselectAnswers();
    button.classList.add('selected');
    if (getSelected()) {
    score++;
    }
    currentQuiz++;
    if (currentQuiz < quizData.length) {
    loadQuiz();
    } else {
        localStorage.setItem("score", score);
        window.location.href = "../result/results.html";
    }
    });
});
