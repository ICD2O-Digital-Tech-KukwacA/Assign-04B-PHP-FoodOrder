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
          <th>Poutine</th>
          <th>Description</th>
          <th>Size</th>
        </tr>
        <tr>
          <td>B-mac</td>
          <td>Fries, cheese curds, gravy, and a Big Mac</td>
          <td>
            <select name="poutine-type" id="poutine-type">
              <option value="Limited">Limited</option>
              <option value="Great">Great</option>
              <option value="Monster">Monster</option>
            </select>
          </td>
          <td>$14.25</td>
        </tr>
      </table>
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
      <div id="user-info">
        <div id="$subtotal"></div>
        <div id="$hst"></div>
        <div id="$total"></div>
      </div>
    </iframe>
  </body>
</html>
