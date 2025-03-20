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
    <img src="Property 3/Screenshot 2024-09-23 121810.png" alt="image 1">
    <div class="text">Front yard</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="Property 3/Screenshot 2024-09-23 121904.png"  alt="image 2">
    <div class="text">Lapa</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Property 3/Screenshot 2024-09-23 121946.png"  alt="image 3">
    <div class="text">Balcony view</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="Property 3/Screenshot 2024-09-23 122024.png"  alt="image 4">
    <div class="text">Kitchen</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Property 3/Screenshot 2024-10-28 210457.png"  alt="image 5">
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
    <h1>R 1 750 000 </h1>
    <p>3 Bedroom House for Sale in Wildtuin Park</p>
    <p>283 Tysmia Street, Wildtuin Park Estate, Wildtuin Park, Krugersdorp</p>
  </form>
</div>


<div class="description">
<form> 
  <h4>Wake up to refreshing air , a holiday feeling!</h4>
  <p>This home is located in a private estate, secured and 24 hour security with access control.

    A beautiful home for your family, close to all amenities and easy connection to major routes, yet far from the buzz of the city.
    
    Come home to peace of mind and tranquility.</p>
</form>
</div>

<h1 class="ds">Property Overview</h1>
<div class="propertyOverview">
  <form >
    <table>
      <tr>Listing Number: 114882600</tr><br>
      <tr>Type of Property: House</tr><br>
      <tr>Listing Date: 03 September 2024</tr><br>
      <tr>Description: New Develpment</tr><br>
      <tr>Street Address: 283 Tysmia Street, Wildtuin Park Estate, Wildtuin Park, Krugersdorp </tr><br>
      <tr>Levies: R 850</tr><br>
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