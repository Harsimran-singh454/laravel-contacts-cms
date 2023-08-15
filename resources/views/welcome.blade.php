<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('style.css') }}">
<title>My Website</title>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>My Website</h1>
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
  <section class="hero">
    <h2>Welcome to My Website</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="cta-button">Learn More</a>
  </section>
  <section class="features">
    <div class="feature-item">
      <h3>Responsive Design</h3>
      <p>Our website is designed to look great on any device.</p>
    </div>
    <div class="feature-item">
      <h3>Unique Style</h3>
      <p>We bring creativity and uniqueness to every aspect of the site.</p>
    </div>
    <div class="feature-item">
      <h3>High Performance</h3>
      <p>We optimize our website for fast loading speeds.</p>
    </div>
  </section>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
  </footer>
</body>
</html>
