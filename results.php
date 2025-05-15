<?php
	// get the indexes of refraction from the textfields
    $size = $_POST['size'];
    $meat = $_POST['meatToppings'];
    $veggies = $_POST['veggieToppings'];
    $sauce = $_POST['sauce'];
    $extra = $_POST['extras'];
	// calculate the speed of light in diamond and water
    const SIZE_LIMITED = 7.75;
    const SIZE_GREAT = 9.75;
    const SIZE_MONSTER = 14.25;
    const MEAT_PRICE = 2.99;
    const VEGGIES_PRICE = 0.99;
    const SAUCE_PRICE = 0.50;
    const EXTRA_PRICE = 1.99;
    const TAX = 0.13;
    $subtotal1 = SIZE_LIMITED + MEAT_PRICE + VEGGIES_PRICE + SAUCE_PRICE + EXTRA_PRICE;
    $subtotal2 = SIZE_GREAT + MEAT_PRICE + VEGGIES_PRICE + SAUCE_PRICE + EXTRA_PRICE;
    $subtotal3 = SIZE_MONSTER + MEAT_PRICE + VEGGIES_PRICE + SAUCE_PRICE + EXTRA_PRICE;
    $tax1 = $subtotal1 * TAX;
    $tax2 = $subtotal2 * TAX;
    $tax3 = $subtotal3 * TAX;
    $total1 = $subtotal + $tax1;
    $total2 = $subtotal + $tax2;
    $total3 = $subtotal + $tax3;

    if ($size == "Limited" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = {$subtotal1}";
        echo "Tax = {$tax1}";
        echo "Total = {$total1}";
    }
    elseif ($size == "Great" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = {$subtotal2}";
        echo "Tax = {$tax2}";
        echo "Total = {$total2}";
    } 
    elseif ($size == "Monster" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = {$subtotal3}";
        echo "Tax = {$tax3}";
        echo "Total = {$total3}";
    }
    elseif ($size == "Limited" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is {SIZE_LIMITED}";
    }
    elseif ($size == "Great" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is {SIZE_GREAT}";
    }
    elseif ($size == "Monster" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is {SIZE_MONSTER}";
    }
    elseif ($size == "No size" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Please place your order";
    }
    else {
        echo "Invalid order.";
        exit;
    }
	// display the results
    echo "<h3>Total:</h3>";
    echo "Your {$speedLightDiamond} m/s.<br>";
    echo "The speed of light in water is {$speedLightWater} m/s.";
?>