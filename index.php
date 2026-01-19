<?php
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo "<p style='color: green;'>Thank you! Your order has been placed.</p>";
}
?>

<!doctype html>
<html>
  <head>
    <title>My COSC 326 Website Project</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="projectStyle.css" />
  </head>
  <body>
    <!-- MOVED: brand is now outside the content box and fixed to the page top-right -->
    <div class="brand" aria-hidden="false">
      <h1>FOODHUB EATERY</h1>
      <p><i>A place to be for the best Kenyan local dishes</i></p>
    </div>

    <!-- top-right links -->
    <nav class="topnav" role="navigation" aria-label="Top links">
      <a href="PROJECT.php" aria-label="Home">Home</a>
      <a href="Menu.html" aria-label="Menu">Menu</a>
      <a href="About.html" aria-label="About">About</a>
      
    </nav>

    <section class="hero">
      <div class="content">
        
    <!-- menu-box remains a separate box but now uses flex and sits after the buttons box -->

    <section class="menu-box" aria-label="Our dishes">
      <h2>Our Top Dishes</h2>

      <div class="menu-grid" role="list">
        <div class="dish">
          <img src="IMG-20251122-WA0013.jpg" alt="Nyama Choma">
          <div class="info">
            <h3>Ugali beef</h3>
            <p><i>Grilled beef with kachumbari and veggies</i></p>
            <span  class="price">Ksh 250</span>
          </div>
        </div>

        <div class="dish">
          <img src="IMG-20251122-WA0016.jpg" alt="Shawarma">
          <div class="info">
            <h3>Shawarma</h3>
            <p><i>Meaty shawarma</i></p>
            <span  class="price">Ksh 200</span>
          </div>
        </div>

        <div class="dish">
          <img src="IMG-20251122-WA0020.jpg" alt="Fish Stew">
          <div class="info">
            <h3>Fish Stew</h3>
            <p><i>Coconut-spiced fish stew</i></p>
            <span  class="price">Ksh 200</span>
          </div>
        </div>
        
        <div class="dish">
          <img src="IMG-20251122-WA0022.jpg" alt="Chapati beans">
          <div class="info">
            <h3>Chapati beans</h3>
            <p><i>Chapati beans and greens</i></p>
            <span  class="price">Ksh 80</span>
          </div>
        </div>
        <div class="dish">
          <img src="IMG-20251122-WA0017.jpg" alt="Loaded Fries">
          <div class="info">
            <h3>Loaded Fries</h3>
            <p><i>Cheesy loaded fries</i></p>
            <span  class="price">Ksh 250</span>
      </div>
        </div>
      <div class="dish">
          <img src="IMG-20251122-WA0021.jpg" alt="Fried chicken">
          <div class="info">
            <h3>Fried chicken</h3>
            <p><i>Grilled fried chicken</i></p>
            <span   class="price">Ksh 300</span>
      </div>
        </div>
      </div>

      <!-- Order button (uses existing .btn styles) -->
      <div class="order-row" style="display:flex;justify-content:center;margin-top:1rem;">
        <a class="btn" href="Order.php" aria-label="Order now">Order Now</a>
      </div>
    </section>
    </div>
      </div>
    </section>

    <!-- ...existing code... -->
  </body>
</html>