<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property 1</title>
    <link rel="stylesheet" href="property1.css">
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
    <img src="Property 1/Screenshot 2024-09-23 093430.png" alt="image 1">
    <div class="text">Front yard</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="Property 1/Screenshot 2024-09-23 093523.png"  alt="image 2">
    <div class="text">Lapa</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Property 1/Screenshot 2024-09-23 104243.png"  alt="image 3">
    <div class="text">Balcony view</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="Property 1/Screenshot 2024-09-23 104355.png"  alt="image 4">
    <div class="text">Kitchen</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Property 1/Screenshot 2024-09-23 104450.png"  alt="image 5">
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
    <h1>R5 300 000</h1>
    <p>Farm for Sale in Magaliesburg</p>
    <p>Magaliesburg, Krugersdorp</p>
  </form>
</div>


<div class="description">
<form> 
  <h4>Superb Lifestyle Farm with all the extras</h4>
  <p>A magnificent thatch roof family residence on a secure lifestyle farm on the outskirts of Magaliesburg, nestled in a beautiful valley with magnificent views. A very well-equipped open plan farmhouse kitchen is the heart of the home with center island, loads of cupboards and a signature Coal stove which heats up the entire kitchen. Spacious separate scullery and pantry with clever shelving and storage for all those preserves from the farm gardens.</p>
</form>
</div>

<h1 class="ds">Property Overview</h1>
<div class="propertyOverview">
  <form >
    <table>
      <tr>Listing Number: 114949200</tr><br>
      <tr>Type of Property: Farm</tr><br>
      <tr>Listing Date: 18 September 2024</tr><br>
      <tr>Size of farm: 36.8 ha</tr><br>
      <tr>Floor Size: 650 m²</tr><br>
      <tr>Rates and Taxes: R 300</tr><br>
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