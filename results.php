<?php
    // set the constants for the prices
    const SIZE_LIMITED = 7.75;
    const SIZE_GREAT = 9.75;
    const SIZE_MONSTER = 14.25;
    CONST HST = 0.13;
    const MEAT_PRICE = 2.99;
    const VEGGIES_PRICE = 1.99;
    const SAUCE_PRICE = 0.50;
    const EXTRAS_PRICE = 1.50;

    // set the order from the form
    $size = $_POST['size'];
    $meat = $_POST['meatToppings'];
    $veggies = $_POST['veggiesToppings'];
    $sauce = $_POST['sauce'];
    $extras = $_POST['extras'];

    if ($size == "Limited") {
        $sizePrice = SIZE_LIMITED;
    } elseif ($size == "Great") {
        $sizePrice = SIZE_GREAT;
    } elseif ($size == "Monster") {
        $sizePrice = SIZE_MONSTER;
    } else {
        $sizePrice = 0;
    }
    // set the price of the meat
    if ($meat == "Bacon") {
        $meatPrice = MEAT_PRICE;
    } elseif ($meat == "Pulled Pork") {
        $meatPrice = MEAT_PRICE;
    } elseif ($meat == "Ground Beef") {
        $meatPrice = MEAT_PRICE;
    } elseif ($meat == "Chicken Breast") {
        $meatPrice = MEAT_PRICE;
    } else {
        $meatPrice = 0;
    }
    // set the price of the veggies
    if ($veggies == "Caramelized onions") {
        $veggiesPrice = VEGGIES_PRICE;
    } elseif ($veggies == "Mushrooms") {
        $veggiesPrice = VEGGIES_PRICE;
    } elseif ($veggies == "Green Pepper") {
        $veggiesPrice = VEGGIES_PRICE;
    } elseif ($veggies == "Green Onions") {
        $veggiesPrice = VEGGIES_PRICE;
    } else {
        $veggiesPrice = 0;
    }
    // set the price of the sauce
    if ($sauce == "B.B.Q") {
        $saucePrice = SAUCE_PRICE;
    } elseif ($sauce == "Sweet Mustard") {
        $saucePrice = SAUCE_PRICE;
    } elseif ($sauce == "Garlic Mayo") {
        $saucePrice = SAUCE_PRICE;
    } elseif ($sauce == "Burger Sauce") {
        $saucePrice = SAUCE_PRICE;
    } else {
        $saucePrice = 0;
    }
    // set the price of the extras
    if ($extras == "Extra Cheese Curds") {
        $extrasPrice = EXTRAS_PRICE;
    } elseif ($extras == "Extra Gravy") {
        $extrasPrice = EXTRAS_PRICE;
    } elseif ($extras == "Gluten-Free Gravy") {
        $extrasPrice = EXTRAS_PRICE;
    } elseif ($extras == "None") {
        $extrasPrice = 0;
    } else {
        $extrasPrice = 0;
    }
    // calculate the total price
    $subtotal = $sizePrice + $meatPrice + $veggiesPrice + $saucePrice + $extrasPrice;
    // calculate the HST
    $hst = $subtotal * HST;
    // calculate the total price with HST
    $totalPriceWithHST = $totalPrice + $hst;
    // format the subtotal
    $subtotal = number_format($subtotal, 2);
    // format the HST
    $hst = number_format($hst, 2);
    // format the total price with HST
    $totalPriceWithHST = number_format($totalPriceWithHST, 2);
?>