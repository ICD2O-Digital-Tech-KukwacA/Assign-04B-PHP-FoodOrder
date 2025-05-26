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
      <table border="3" style="width:50%">
        <tr>
          <td>MENU</td>
        </tr>
        <tr>
          <td>B-mac</td>
          <td><img src="./images/b-mac.webp" sizes="24 x24" alt="B-mac"></td>
        </tr>
        <tr>
          <td>$Bacon Cheese Burger</td>
          <td><img src="./images/bacon-cheese-burger.webp" sizes="24 x24" alt="Bacon Cheese Burger"></td>
        </tr>
        <tr>
          <td>Beef OMG</td>
          <td><img src="./images/beef-omg.webp" sizes="24 x24" alt="Beef OMG"></td>
        </tr>
        <tr>
          <td>Buffalo Chicken</td>
          <td><img src="./images/buffalo-chicken.webp" sizes="24 x24" alt="Buffalo Chicken"></td>
        </tr>
        <tr>
          <td>Butter Chicken</td>
          <td><img src="./images/butter-chicken.webp" sizes="24 x24" alt="Butter Chicken"></td>
        </tr>
        <tr>
          <td>Canadian</td>
          <td><img src="./images/canadian.webp" sizes="24 x24" alt="Canadian"></td>
        </tr>
        <tr>
          <td>Chicken Bacon Ranch</td>
          <td><img src="./images/Chicken-Bacon-Ranch.webp" sizes="24 x24" alt="Chicken Bacon Ranch"></td>
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
    <iframe id="results" name="results" style="width:100%; height:150px;">
      <div id="user-info">
        <div id="$subtotal"></div>
        <div id="$hst"></div>
        <div id="$total"></div>
      </div>
    </iframe>
  </body>
</html>
