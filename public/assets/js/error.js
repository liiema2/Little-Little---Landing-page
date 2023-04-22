
const numberCardInput = document.querySelector('#number_card');

numberCardInput.addEventListener('input', () => {
  const numberCardValue = numberCardInput.value;

  if (numberCardValue.length !== 16) {
    numberCardInput.setCustomValidity('Số thẻ tín dụng phải có đúng 16 chữ số');
  } else {
    numberCardInput.setCustomValidity('');
  }
});
