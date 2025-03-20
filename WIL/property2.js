let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function calculateBond() {
  const purchasePrice = parseFloat(document.getElementById('purchase-price').value);
  const deposit = parseFloat(document.getElementById('deposit').value) || 0;
  const interestRate = parseFloat(document.getElementById('interest-rate').value) / 100 / 12;
  const term = parseFloat(document.getElementById('term').value) * 12;

  const loanAmount = purchasePrice - deposit;
  const monthlyPayment = (loanAmount * interestRate) / (1 - Math.pow(1 + interestRate, -term));
  
  document.getElementById('result').innerText = `Monthly Payment: R${monthlyPayment.toFixed(2)}`;
}