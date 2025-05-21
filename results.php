<?php
    // set the constants for the prices
    const SIZE_LIMITED = 7.75;
    const SIZE_GREAT = 9.75;
    const SIZE_MONSTER = 14.25;
    const HST = 0.13;
    const MEAT_PRICE = 2.99;
    const VEGGIES_PRICE = 1.99;
    const SAUCE_PRICE = 0.50;
    const EXTRAS_PRICE = 1.50;

    // set the order from the form
    $size = $_POST['size'];

     // calculate the total price
    $subtotal = $sizePrice + $meatPrice + $veggiesPrice + $saucePrice + $extrasPrice;
    // calculate the HST
    $hst = $subtotal * HST;
    // calculate the total price with HST
    $totalPriceWithHST = $subtotal + $hst;
    // format the subtotal
    $subtotal = number_format($subtotal, 2);
    // format the HST
    $hst = number_format($hst, 2);
    // format the total price with HST
    $totalPriceWithHST = number_format($totalPriceWithHST, 2);
    
?>