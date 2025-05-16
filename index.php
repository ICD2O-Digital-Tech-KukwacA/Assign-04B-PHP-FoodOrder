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
          <td>Size</td>
          <td>Price</td>
          <td>Meat</td>
          <td>Price</td>
          <td>Veggies</td>
          <td>Price</td>
          <td>Sauce</td>
          <td>Price</td>
          <td>Extra</td>
          <td>Price</td>
        </tr>
        <tr>
          <td>Limited</td>
          <td>$7.75</td>
          <td>Bacon</td>
          <td>$2.99</td>
          <td>Caramelized onions</td>
          <td>$2.99</td>
          <td>B.B.Q</td>
          <td>$0.50</td>
          <td>Extra Cheese Curds</td>
          <td>$1.99</td>
        </tr>
        <tr>
          <td>Great</td>
          <td>$9.75</td>
          <td>Pulled Pork</td>
          <td>$2.99</td>
          <td>Mushrooms</td>
          <td>$2.99</td>
          <td>Sweet Mustard</td>
          <td>$0.50</td>
          <td>Extra Gravy</td>
          <td>$1.99</td>
        </tr>
        <tr>
          <td>Monster</td>
          <td>$14.25</td>
          <td>Ground Beef</td>
          <td>$2.99</td>
          <td>Green Pepper</td>
          <td>$2.99</td>
          <td>Garlic Mayo</td>
          <td>$0.50</td>
          <td>Gluten-Free Gravy</td>
          <td>$1.99</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Chicken Breast</td>
          <td>$2.99</td>
          <td>Green Onions</td>
          <td>$2.99</td>
          <td>Burger Sauce</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Karaage Chicken</td>
          <td>$2.99</td>
          <td>Sun Dried Tomatoes</td>
          <td>$2.99</td>
          <td>Sriracha</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Popcorn Chicken</td>
          <td>$2.99</td>
          <td>Jalapenos</td>
          <td>$2.99</td>
          <td>Buffalo</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Corn Dog Slices</td>
          <td>$2.99</td>
          <td>Dill Pickles</td>
          <td>$2.99</td>
          <td>General TSO</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Popcorn Chicken</td>
          <td>$2.99</td>
          <td></td>
          <td></td>
          <td>Hot Honey</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>Premium</td>
          <td>$5.99</td>
          <td></td>
          <td></td>
          <td>Ranch</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Sweet Sriracha B.B.Q</td>
          <td>$0.50</td>
          <td></td>
          <td></td>
        </tr>
        </table>
        <br>
        <br>
      </table>
    <!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <h3>Place your order</h3>
      <label for="size">Size</label>
      <input type="text" id="size" name="size"><br><br>
      <h4>Toppings</h4>
      <label for="meatToppings">Meat toppings</label>
      <input type="text" id="meatToppings" name="meatToppings"><br><br>
      <label for="veggieToppings">Veggie toppings</label>
      <input type="text" id="veggieToppings" name="veggieToppings"><br><br>
      <label for="meatToppings">Sauce</label>
      <input type="text" id="sauce" name="sauce"><br><br>
      <label for="extras">Extras</label>
      <input type="text" id="extras" name="extras"><br><br>
      <input type="submit" value="Calculate total">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results" style="width:100%; height:150px;"></iframe>
  </body>
</html>
