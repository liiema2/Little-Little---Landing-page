const closeImage = document.getElementById('close');
const messageDiv = document.getElementById('message');

// if (closeImage !== null && messageDiv !== null) {
  closeImage.addEventListener('click', function() {
    messageDiv.style.display = 'none';
  });
// }
