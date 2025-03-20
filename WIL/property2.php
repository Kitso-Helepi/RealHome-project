<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property 2</title>
    <link rel="stylesheet" href="property2.css">
</head>
<body>
    <header class="header">
        <nav>
          <div class="logo">
            <h2>RH</h2>
            <h2>RealHome</h2>
          </div>
          <ul>
            <li><a href="Index.html">Home</a></li>
            <li><a href="#">Properties</a></li>
            <li><a href="#">Agents</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="Property 2/Screenshot 2024-09-23 114053.png" alt="image 1">
    <div class="text">Front yard</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="Property 2/Screenshot 2024-09-23 114133.png"  alt="image 2">
    <div class="text">Lapa</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Property 2/Screenshot 2024-09-23 114301.png"  alt="image 3">
    <div class="text">Balcony view</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="Property 2/Screenshot 2024-09-23 114438.png"  alt="image 4">
    <div class="text">Kitchen</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Property 2/Screenshot 2024-10-28 204226.png"  alt="image 5">
    <div class="text">Bedroom</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div class="span" >
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<h1 class="ds">Description</h1><br>
<div class="description">
  <form > 
    <h1>R 3 895 000 </h1>
    <p>4 Bedroom House for Sale in Homes Haven</p>
    <p>Falls Road, Homes Haven, Krugersdorp</p>
  </form>
</div>


<div class="description">
<form> 
  <h4>Superb 4 Bedroom House in Homes Haven</h4>
  <p>Welcome to an unparalleled living experience in the heart of Cradle Ridge Estate! This completed architectural masterpiece spans 322 m² on a manageable-sized 418 m² stand, promising an oasis of luxury. This occupation-ready, 4-bedroom 4.5-bathroom haven boasts a meticulous design.</p>
</form>
</div>

<h1 class="ds">Property Overview</h1>
<div class="propertyOverview">
  <form >
    <table>
      <tr>Listing Number: 112880394</tr><br>
      <tr>Type of Property: House</tr><br>
      <tr>Listing Date: 29 July 2024</tr><br>
      <tr>Erf Size: 418 m²</tr><br>
      <tr>Floor Size: 322 m²</tr><br>
      <tr>Rates and Taxes: R 2000</tr><br>
      <tr>Pets Allowed: Yes</tr>
    </table>

  </form>
</div>

<div class="calculator">
  <h1>Bond Calculator</h1>
  <div class="input-group">
      <label for="purchase-price" class="label">Purchase Price:</label>
      <input type="number" id="purchase-price" class="input" placeholder="R" required>
  </div>
  <div class="input-group">
      <label for="deposit" class="label">Deposit (Optional):</label>
      <input type="number" id="deposit" class="input" placeholder="R">
  </div>
  <div class="input-group">
      <label for="interest-rate" class="label">Interest Rate (%):</label>
      <input type="number" id="interest-rate" class="input" placeholder="%" required>
  </div>
  <div class="input-group">
      <label for="term" class="label">Term (Years):</label>
      <input type="number" id="term" class="input" placeholder="Years" required>
  </div>
  <button class="button" onclick="calculateBond()">Calculate</button>
  <div class="result" id="result"></div>
</div>

<footer>
  <div class="footer-container">
    <div class="footer-logo">
      <img src="IMG/LOGO.jpg" alt="RealHome Logo">
    </div>
    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#Homepage">Home</a></li>
        <li><a href="#Properties">Properties</a></li>
        <li><a href="#Agents">Agents</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
    </div>
    <div class="footer-contact">
      <h3>Contact Us</h3>
      <p>Phone: 012 345 678</p>
      <p>Email: [info@realhome.co.za](mailto:info@realhome.co.za)</p>
      <p>Address: 123 Main Street, Pretoria</p>
    </div>
    <div class="footer-social">
      <h3>Follow Us</h3>
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook">Facebook</i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter">Twitter</i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram">Instagram</i></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-copyright">
    <p>&copy; 2024 RealHome. All rights reserved.</p>
  </div>
</footer>
    <script src="property1.js"></script>
</body>
</html>