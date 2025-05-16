<?php 
    // get the order from the form
    // set the constants for the prices
    const LIMITED = 7.75;
    const GREAT = 9.75;
    const MONSTER = 14.25;
    const MEAT_TOPPING = 2.99;
    const VEGGIE_TOPPING = 1.99;
    const SAUCE = 0.50;
    const EXTRAS = 1.50;
    // set the constants for the tax
    const TAX = 0.13;
    // set the constants for the sizes
    const SMALL_SIZE = "Limited";
    const MEDIUM_SIZE = "Great";
    const LARGE_SIZE = "Monster";
    //set the variables for the order
    $size = $_POST['size'];
    $meat = $_POST['meatToppings'];
    $veggie = $_POST['veggieToppings'];
    $sauce = $_POST['sauce'];
    $extras = $_POST['extras'];
    $subtotal = "$size + $meat + $veggie + $sauce + $extras";
    $tax = "$subtotal * TAX";
    $total = "$subtotal + $tax";
    $meatToppings = "Bacon || Pulled Pork || Ground Beef || Chicken Breast || Karaage Chicken || Popcorn Chicken || Philly Steak || Corn dog slices || Premium";
    $veggieToppings = "Caramelized Onions || Mushrooms || Green Pepper || Green Onions || Sun Dried Tomatoes || Jalapenos || Dill Pickles";
    $sauces = "B.B.Q || Sweet Mustard || Garlic Mayo || Burger Sauce || Sriracha || Buffalo || General TSO || Hot Honey || Ranch || Sweet Sriracha B.B.Q";
    $extraToppings = "Extra cheese curds || Extra gravy || Gluten free gravy";
    if ($size == SMALL_SIZE && $meat == $meatToppings && $veggie == $veggieToppings && $sauce == $sauces && $extras == $extraToppings) {
        $subtotal = LIMITED + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == MEDIUM_SIZE && $meat == $meatToppings && $veggie == $veggieToppings && $sauce == $sauces && $extras == $extraToppings) {
        $subtotal = GREAT + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == LARGE_SIZE && $meat == $meatToppings && $veggie == $veggieToppings && $sauce == $sauces && $extras == $extraToppings) {
        $subtotal = MONSTER + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == SMALL_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = LIMITED + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == MEDIUM_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = GREAT + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == LARGE_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = MONSTER + MEAT_TOPPING + VEGGIE_TOPPING + SAUCE + EXTRAS;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    else {
        echo "Please place you order.";
    }
?>