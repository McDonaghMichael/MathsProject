let previousData = JSON.parse(localStorage.getItem("data")) || [];

const username = localStorage.getItem("username");
const score = localStorage.getItem("score");

previousData.push({ username: username, score: score });

localStorage.setItem("data", JSON.stringify(previousData));

const tableBody = document.getElementById("table-body");

for (let i = 0; i < previousData.length; i++) {
  const row = document.createElement("tr");

  const usernameCell = document.createElement("td");
  usernameCell.textContent = previousData[i].username;
  row.appendChild(usernameCell);

  const scoreCell = document.createElement("td");
  scoreCell.textContent = previousData[i].score;
  row.appendChild(scoreCell);

  tableBody.appendChild(row);
}

const backBtn = document.getElementById('back');
backBtn.addEventListener('click', () => {
  window.location.href = '../login/login.html';
});

const clearBtn = document.getElementById('clear_table');
clearBtn.addEventListener('click', () => {
  tableBody.innerHTML = '';
  localStorage.removeItem('data');
});
