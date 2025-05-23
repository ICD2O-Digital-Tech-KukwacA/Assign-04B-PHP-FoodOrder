<?php
    // set the constants for the prices
    const HST = 0.13;

    // set the order from the form
    $size = $_POST['size'];
    $poutineType = $_POST['poutine-type'];
    
    if ($size == "limited" && $poutineType == "b-mac") {
        $poutinePrice = 14.25;
    }
    elseif ($size == "great" && $poutineType == "b-mac") {
        $poutinePrice = 16.75;
    }
    elseif ($size == "monster" && $poutineType == "b-mac") {
        $poutinePrice = 19.25;
    }
    elseif ($size == "limited" && $poutineType == "bacon cheese burger") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "bacon cheese burger") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "bacon cheese burger") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" && $poutineType == "beef omg") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "beef omg") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "beef omg") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" && $poutineType == "buffalo chicken") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "buffalo chicken") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "buffalo chicken") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" && $poutineType == "butter chicken") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "butter chicken") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "butter chicken") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" && $poutineType == "canadian") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "canadian") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "canadian") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" && $poutineType == "chicken bacon ranch") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" && $poutineType == "chicken bacon ranch") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" && $poutineType == "chicken bacon ranch") {
        $poutinePrice = 17.25;
    }
    else {
        $sizePrice = 0;
    }

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