<?php
    // set the constants for the prices
    const HST = 0.13;

    // set the order from the form
    $size = $_POST['size'];
    $poutineType = $_POST['poutine-type'];
    
    if ($size == "Limited" && $poutineType == "B-mac") {
        $poutinePrice = 14.25;
    }
    elseif ($size == "Great" && $poutineType == "B-mac") {
        $poutinePrice = 16.75;
    }
    elseif ($size == "Monster" && $poutineType == "B-mac") {
        $poutinePrice = 19.25;
    }
    
?>