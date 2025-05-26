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
      <table border="4" style="width:30%">
        <tr>
          <td>MENU</td>
        </tr>
        <tr>
          <td>B-mac</td>
          <td>$Bacon Cheese Burger</td>
          <td>Beef OMG</td>
          <td>Buffalo Chicken</td>
          <td>Butter Chicken</td>
          <td>Canadian</td>
          <td>Chicken Bacon Ranch</td>
        </tr>
        <tr>
          <td><img src="./images/b-mac.webp" sizes="5 x 5" alt="B-mac"></td>
        </tr>
        <tr>
          <td><img src="./images/Bacon-Cheese-Burger.webp" sizes="5 x 5" alt="Bacon Cheese Burger"></td>
        </tr>
        <tr>
          <td><img src="./images/Beef-OMG.webp" sizes="5 x 5" alt="Beef OMG"></td>
        </tr>
        <tr>
          <td><img src="./images/Buffalo-Chicken.webp" sizes="5 x 5" alt="Buffalo Chicken"></td>
        </tr>
        <tr>
          <td><img src="./images/Butter-Chicken.webp" sizes="5 x 5" alt="Butter Chicken"></td>
        </tr>
        <tr>
          <td><img src="./images/canadian.webp" sizes="5 x 5" alt="Canadian"></td>
        </tr>
        <tr>
          <td><img src="./images/Chicken-Bacon-Ranch.webp" sizes="5 x 5" alt="Chicken Bacon Ranch"></td>
        </tr>
      </table>
    <!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <h3>Place your order</h3>
      <label for="size">Size</label>
      <input type="text" id="size" name="size"><br><br>
      <label for="poutine">Poutine type</label>
      <input type="text" id="poutine-type" name="poutine"><br><br>
      <input type="submit" value="Calculate total">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">
      <div id="user-info">
        <div id="$subtotal"></div>
        <div id="$hst"></div>
        <div id="$total"></div>
      </div>
    </iframe>
  </body>
</html>
