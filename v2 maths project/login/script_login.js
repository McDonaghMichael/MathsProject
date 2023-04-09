const form = document.querySelector('.contact-form');
const usernameInput = document.querySelector('#username');

const input = document.querySelector('#username');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const username = input.value;
  localStorage.setItem('username', username);
});

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const username = usernameInput.value.trim();

  if (username === '') {
    alert('Please enter your username');
    usernameInput.focus();
    return;
  }
  else 
  {
    localStorage.setItem("username", username);
    window.location.href = '../quiz/quiz.html';
  }
});


