var quantityInput = document.querySelector(".quantity .product-detail-count");
var increaseButton = document.querySelector(".quantity #increase");
var decreaseButton = document.querySelector(".quantity #decrease");

increaseButton.addEventListener("click", () => {
  var currentValue = parseInt(quantityInput.value);
  quantityInput.value = currentValue + 1;
});

decreaseButton.addEventListener("click", () => {
  var currentValue = parseInt(quantityInput.value);
  if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
  }
});
