<?php
	// get the indexes of refraction from the textfields
    $size = $_POST['size'] || "No size" || "Limited" || "Great" || "Monster";
    $meat = $_POST['meatToppings'] || "No Meat" || "Any Meat";
    $veggies = $_POST['veggieToppings'] || "No Veggies" || "Any Veggies";
    $sauce = $_POST['sauce'] || "No Sauce" || "Any Sauce";
    $extra = $_POST['extras'] || "No Extra" || "Any Extra";
	// calculate the subtotal, tax, and total
    $sizeLimited = 7.75;
    $sizeGreat  = 9.75;
    $sizeMonster = 14.25;
    $meatPrice = 2.99;
    $veggiesPrice = 0.99;
    $saucePrice = 0.50;
    $extrasPrice = 1.99;
    $tax = 0.13;
    $subtotal1 = $sizeLimited + $meatPrice + $veggiesPrice + $saucePrice + $extrasPrice;
    $subtotal2 = $sizeGreat + $meatPrice + $veggiesPrice + $saucePrice + $extrasPrice;
    $subtotal3 = $sizeMonster + $meatPrice + $veggiesPrice + $saucePrice + $extrasPrice;
    $tax1 = $subtotal1 * $tax;
    $tax2 = $subtotal2 * $tax;
    $tax3 = $subtotal3 * $tax;
    $total1 = $subtotal1 + $tax1;
    $total2 = $subtotal2 + $tax2;
    $total3 = $subtotal3 + $tax3;

    if ($size == "Limited" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${$subtotal1}";
        echo "Tax = ${$tax1}";
        echo "Total = ${$total1}";
    }
    elseif ($size == "Great" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${$subtotal2}";
        echo "Tax = ${$tax2}";
        echo "Total = ${$total2}";
    } 
    elseif ($size == "Monster" && $meat == "Any Meat" && $veggies == "Any Veggies" && $sauce == "Any Sauce" && $extra == "Any Extra") {
        echo "Subtotal = ${$subtotal3}";
        echo "Tax = ${$tax3}";
        echo "Total = ${$total3}";
    }
    elseif ($size == "Limited" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is ${$sizeLimited}";
    }
    elseif ($size == "Great" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is ${$sizeGreat}";
    }
    elseif ($size == "Monster" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Your total is ${$sizeMonster}";
    }
    elseif ($size == "No size" && $meat == "No Meat" && $veggies == "No Veggies" && $sauce == "No Sauce" && $extra == "No Extra") {
        echo "Please place your order";
    }
    else {
        echo "Invalid order.";
        exit;
    }
?>