let previousData = JSON.parse(localStorage.getItem("data")) || [];
const score = localStorage.getItem("score");

previousData.push({ score: score });

console.log(score);
document.getElementById("score").innerHTML = "Score: " + score;

document.getElementById("result-num").value = score;