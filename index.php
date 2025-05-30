<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Food Order">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Food Order</title>
  </head>
  <body>
    <h1>The Great Canadian Poutinerie Menu</h1>
    <main class="mdl-layout__content">
      <!--Menu-->
      <h3>Menu</h3>
      <table border=3 width=60%>
        <tr>
          <th>Poutine</th>
          <th>Description</th>
          <th>Sizes</th>
        </tr>
        <tr>
          <td>Bacon cheese burger</td>
          <td>Bacon, Ground Beef, & Melted Cheese</td>
          <td>Limited</td>
        </tr>
        <tr>
          <td>Beef OMG</td>
          <td>Ground Beef, Caramelized Onions, Mushrooms, & Green Peppers</td>
          <td>Great</td>
        </tr>
        <tr>
          <td>Buffalo chicken</td>
          <td>Popcorn Chicken, & Buffalo Sauce</td>
          <td>Monster</td>
        </tr>
        <tr>
          <td>Candian</td>
          <td>Ground Beef, Caramelized Onions, Mushrooms, Bacon, & Maple Syrup</td>
        </tr>
        <tr>
          <td>Original philly</td>
          <td>Philly Steak, Caramelized Onions, Mushrooms, Green Peppers, & Melted Cheese</td>
        </tr>
        <tr>
          <td>Pulled pork</td>
          <td>Pulled Pork & B.B.Q. Sauce</td>
        </tr>
        <tr>
          <td>Sauce Boss</td>
          <td>Popcorn Chicken, B.B.Q. Sauce, Sweet Mustard, & Garlic Mayo</td>
        </tr>
        <tr>
          <td>Sweet sriracha</td>
          <td>Pulled Pork & Sweet Sriracha B.B.Q. Sauce</td>
        </tr>
      </table>
      <h2>**Place your order as it is on the menu**</h2>
      <br>
    <!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <h3>Place your order</h3>
      <label for="size">Size</label>
      <input type="text" id="size" name="size"><br><br>
      <label for="poutine">Poutine</label>
      <input type="text" id="poutine" name="poutine"><br><br>
      <input type="submit" value="Calculate total">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">
      <?php
      echo "<h4>Order Summary</h4>";
      echo "<p>Subtotal: $subtotal</p>";
      echo "<p>HST: $tax</p>";
      echo "<p>Total: $total</p>";
      echo $display;
      ?>
    </iframe>
  </body>
</html>
