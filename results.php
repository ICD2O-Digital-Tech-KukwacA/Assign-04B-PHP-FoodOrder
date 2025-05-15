<?php
	// get the indexes of refraction from the textfields
    $size = $_POST['size'] ||;
    $meat = $_POST['meatToppings'];
    $veggies = $_POST['veggieToppings'];
    $sauce = $_POST['sauce'];
    $extra = $_POST['extras'];
	// calculate the subtotal, tax, and total
    $subtotal = 0;
    $tax = 0;
    $total = 0;
    $taxRate = 0.13; // 13% tax rate
    $sizePrice = 0;
    $meatPrice = 0;
    $veggiePrice = 0;
    $saucePrice = 0;
    $extraPrice = 0;
    // set the prices for each size
    if ($size == "Limited") {
        $sizePrice = 5.99;
    }
    elseif ($size == "Great") {
        $sizePrice = 7.99;
    }
    elseif ($size == "Monster") {
        $sizePrice = 9.99;
    }
    else {
        echo "Invalid size.";
        exit;
    }
    // set the prices for each meat topping
    if ($meat == "Any Meat") {
        $meatPrice = 2.99;
    }
    elseif ($meat == "No Meat") {
        $meatPrice = 0;
    }
    else {
        echo "Invalid meat topping.";
        exit;
    }
    // set the prices for each veggie topping
    if ($veggies == "Any Veggies") {
        $veggiePrice = 1.99;
    }
    elseif ($veggies == "No Veggies") {
        $veggiePrice = 0;
    }
    else {
        echo "Invalid veggie topping.";
        exit;
    }
    // set the prices for each sauce
    if ($sauce == "Any Sauce") {
        $saucePrice = 0.50;
    }
    elseif ($sauce == "No Sauce") {
        $saucePrice = 0;
    }
    else {
        echo "Invalid sauce.";
        exit;
    }
    // set the prices for each extra
    if ($extra == "Any Extra") {
        $extraPrice = 1.99;
    }
    elseif ($extra == "No Extra") {
        $extraPrice = 0;
    }
    else {
        echo "Invalid extra.";
        exit;
    }
    // calculate the subtotal
    $subtotal = $sizePrice + $meatPrice + $veggiePrice + $saucePrice + $extraPrice;
    // calculate the tax
    $tax = $subtotal * $taxRate;
    // calculate the total
    $total = $subtotal + $tax;
    // display the results
    echo "<h1>Your Order</h1>";
    echo "<p>Size: $size</p>";
    echo "<p>Meat: $meat</p>";
    echo "<p>Veggies: $veggies</p>";
    echo "<p>Sauce: $sauce</p>";
    echo "<p>Extra: $extra</p>";
    echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
    echo "<p>Tax: $" . number_format($tax, 2) . "</p>";
    echo "<p>Total: $" . number_format($total, 2) . "</p>";
    // display the results based on the order
    if ($size == "Limited" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${}";
        echo "Tax = ${}";
        echo "Total = ${}";
    }
    elseif ($size == "Great" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${}";
        echo "Tax = ${}";
        echo "Total = ${}";
    }
    elseif ($size == "Monster" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${}";
        echo "Tax = ${}";
        echo "Total = ${}";
    }
    elseif ($size == "Limited" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Subtotal = ${}";
        echo "Tax = ${}";
        echo "Total = ${}";
    }
    elseif ($size == "Great" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is ${}";
    }
    elseif ($size == "Monster" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is ${}";
    }
    elseif ($size == "No size" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Please place your order";
    }
    else {
        echo "Invalid order.";
        exit;
    }

?>