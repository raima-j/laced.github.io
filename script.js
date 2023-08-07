// script.js
document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;


  console.log(`Username: ${username}, Password: ${password}`);
});

document.getElementById('paymentForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const cardNumber = document.getElementById('cardNumber').value;
  const expiryDate = document.getElementById('expiryDate').value;
  const cvv = document.getElementById('cvv').value;

  console.log(`Card Number: ${cardNumber}, Expiry Date: ${expiryDate}, CVV: ${cvv}`);
});
