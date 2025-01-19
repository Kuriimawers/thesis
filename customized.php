<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <link rel="stylesheet" href="customized.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="logo">
        <a id="logo" href="homepage.php"><img src="Logo\Logo.jpg" alt="Anne" /></a>
        <span>Sweet Creations</span>
      </div>

      <nav>
        <ul class="right">
          <li><a href="index.php">Front</a></li>
          <li><a href="homepage.php">Products</a></li>
          <li class="dropdown">
            <a href="#cakes">Category</a>
            <div class="dropdown-content">
              <a href="birthdaycakes.php">Birthday Cakes</a>
              <a href="cupcakes.php">Cupcakes</a>
              <a href="bentocakes.php">Bento Cakes</a>
              <a href="numbercakes.php">Number Cakes</a>
              <a href="specialcakes.php">Specials</a>
            </div>
          </li>
          <li><a href="customized.php">Customize</a></li>
          <li href="">Policy</li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
      </div>
    </header>

    <!-- Main Content -->
    <main>
      <section class="intro">
        <h1>Welcome to Sweet Creations</h1>
        <p>At Sweet Creations, we're committed to providing you with a seamless and stress-free experience from start to finish.</p>
        <p>To get started, you can browse a bunch of awesome cake designs for inspiration, or simply fill out our easy-to-use form. Tell us about your event, your flavor preferences, and any design ideas you have in mind. We will review your request and get back to you promptly with a personalized quote and design concept.</p>
        <p>Once you've approved the design and quote, we'll take care of the rest. And we will use only the finest ingredients and the latest techniques to create a cake. Order now and taste the difference.</p>
      </section>

      <!-- Order Box -->
      <section class="order-box">
        <div class="order-content">
          <h2>Want to order your customized cake?</h2>
          <button onclick="window.location.href='customform.php'">Customize Form</button>
          <button onclick="window.location.href='bentocakeform.php'">Bentocake Form</button>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <nav>
      <ul>
          <li><a href="#front">Cake</a></li>
          <li><a href="#home">Cupcake</a></li>
          <li><a href="#cakes">BentoCake</a></li>
          <li><a href="#customized">Customized</a></li>
          <li><a href="#about">SpecialCake</a></li>
        </ul>
      </nav>
    </footer>

    <script src="homepage.js"></script>
  </body>
</html>