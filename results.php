<?php 
    // get the order from the form
    $size = $_POST['size'];
    $sizePrice = "";
    $meat = $_POST['meatToppings'];
    $meatPrice = "";
    $veggie = $_POST['veggieToppings'];
    $veggiePrice = "";
    $sauce = $_POST['sauce'];
    $saucePrice = "";
    $extras = $_POST['extras'];
    $extrasPrice = "";
    $subtotal = 0;
    $tax = 0;
    $total = 0;
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
    $meatToppings = "Any meat topping";
    $veggieToppings = "Any veggie topping";
    $sauces = "Any sauce";
    $extraToppings = "Any extras";
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
    }
    elseif ($size == SMALL_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = LIMITED;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == MEDIUM_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = GREAT;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    elseif ($size == LARGE_SIZE && $meat != $meatToppings && $veggie != $veggieToppings && $sauce != $sauces && $extras != $extraToppings) {
        $subtotal = MONSTER;
        $tax = $subtotal * TAX;
        $total = $subtotal + $tax;
    }
    else {
        echo "Please place you order.";
    }
?>