<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sweet Creations</title>
    <style>
      body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
        text-align: center;
      }

      @keyframes slideInFromLeft {
        0% {
          transform: translateX(-100%);
          opacity: 0;
        }
        100% {
          transform: translateX(0);
          opacity: 1;
        }
      }

      .animate-heading {
        animation: slideInFromLeft 1s ease-out; /* Apply the animation to the heading */
        text-align: center;
      }

      header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        position: sticky;
        top: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        animation: slideDown 0.5s ease-out;
      }

      @keyframes slideDown {
        from {
          transform: translateY(-100%);
        }
        to {
          transform: translateY(0);
        }
      }

      .logo {
        display: flex;
        align-items: center;
        font-weight: bold;
      }

      .logo img {
        height: 50px;
        margin-right: 10px;
        animation: fadeIn 1s ease-in;
        width: 100%; /* Make the image fill the circle */
        height: 100%; /* Make the image fill the circle */
        object-fit: cover;
        width: 70px; /* Set the width and height to the same value to create a circle */
        height: 70px;
        border-radius: 50%; /* Make the border-radius 50% to create a circle */
        overflow: hidden;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      @keyframes bounce {
        0%,
        20%,
        50%,
        80%,
        100% {
          transform: translateY(0);
        }
        40% {
          transform: translateY(-20px);
        }
        60% {
          transform: translateY(-10px);
        }
      }

      h1 {
        font-size: 3em;
        color: #ff6f61;
        margin-bottom: 10px;
        animation: bounce 2s infinite;
      }

      nav ul {
        list-style: none;
        display: center;
        gap: 15px;
      }

      nav a {
        text-decoration: none;
        color: #333;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
      }

      nav a:hover {
        background-color: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
      }

      .dropdown {
        position: relative;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        min-width: 160px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        animation: fadeIn 0.5s ease-in;
      }

      .dropdown-content a {
        display: block;
        padding: 10px;
        color: #333;
      }

      nav li {
        text-align: center;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .button {
        display: inline-block;
        margin: 20px 0;
        padding: 10px 20px;
        background-color: #ff6f61;
        color: white;
        text-decoration: none;
        border-radius: 25px;
        font-weight: bold;
        transition: background-color 0.3s, transform 0.3s;
        animation: fadeIn 2s ease-in;
      }

      .button:hover {
        background-color: #ff9472;
        transform: translateY(-3px);
      }

      h3 {
        font-size: 1.5em;
        color: #555;
        margin-bottom: 5px;
        animation: fadeIn 2s ease-in;
      }

      h2 {
        font-size: 2em;
        color: #ff9472;
        margin: 10px 0;
        animation: fadeIn 2s ease-in;
      }

      p {
        font-size: 1.2em;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
        animation: fadeIn 2s ease-in;
        margin-bottom: 25px;
      }
      nav ul {
        list-style: none;
        display: flex;
        gap: 15px;
        float: right;
      }

      nav a {
        text-decoration: none;
        color: #333;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.3s;
      }

      nav a:hover {
        background-color: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
      }
      footer {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
      }

      footer nav ul {
        justify-content: center;
      }

      footer a {
        color: white;
        margin: 0 10px;
      }

      .right {
        float: right;
        padding: 10x;
        width: 150x;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">
        <a id="logo" href="homepage.php"><img src="Logo\Logo.jpg" alt="Anne" /></a>
        <span>Sweet Creations</span>

        <nav>
        <ul class="right">
          <li><a href="frontpage.php">Front</a></li>
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

    <h1>Sweet Creations</h1>
    <a href="homepage.php" class="button">Let's get started</a>
    <h3>By ANNE</h3>
    <h2>CUSTOMIZED CAKES, CUPCAKES & PASTRIES</h2>
    <h2>Unleash your imagination with our custom cakes!</h2>
    <p>
      Our bakery is a haven for cake lovers seeking unique and personalized
      treats. We blend exquisite taste with artistic flair to create edible
      masterpieces tailored to your desires. Whether it's a lavish wedding cake,
      a playful kids' birthday cake, or a corporate event centerpiece, we'll
      bake your vision to perfection. Savor every moment with our handcrafted,
      custom-made cakes.
    </p>
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
  </body>
</html>
