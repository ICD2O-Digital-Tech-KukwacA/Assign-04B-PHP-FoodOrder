<?php
    // set the constants for the prices
    const HST = 0.13;

    // set the order from the form
    $size = $_POST['size'];
    $poutineType = $_POST['poutine-type'];
    
    if ($size == "limited" || "Limited" || "LIMITED" && $poutineType == "b-mac" || "B-mac" || "B-MAC") {
        $poutinePrice = 14.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "b-mac" || "B-mac" || "B-MAC") {
        $poutinePrice = 16.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "b-mac" || "B-mac" || "B-MAC") {
        $poutinePrice = 19.25;
    }
    elseif ($size == "limited" || "Limited" || "LIMITED" && $poutineType == "bacon cheese burger" || "Bacon Cheese Burger" || "BACON CHEESE BURGER") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "bacon cheese burger" || "Bacon Cheese Burger" || "BACON CHEESE BURGER") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "bacon cheese burger" || "Bacon Cheese Burger" || "BACON CHEESE BURGER") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" || "Limited" ||"LIMITED" && $poutineType == "beef omg" || "Beef OMG" || "BEEF OMG") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "beef omg" || "Beef OMG" || "BEEF OMG") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "beef omg" || "Beef OMG" || "BEEF OMG") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" ||"Limited" || "LIMITED" && $poutineType == "buffalo chicken" || "Buffalo Chicken" || "BUFFALO CHICKEN") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "buffalo chicken" || "Buffalo Chicken" || "BUFFALO CHICKEN") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "buffalo chicken" || "Buffalo Chicken" || "BUFFALO CHICKEN") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" ||"Limited" || "LIMITED" && $poutineType == "butter chicken" || "Butter Chicken" || "BUTTER CHICKEN") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "butter chicken" || "Butter Chicken" || "BUTTER CHICKEN") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "butter chicken" || "Butter Chicken" || "BUTTER CHICKEN") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" ||"Limited" || "LIMITED" && $poutineType == "canadian" || "Canadian" || "CANADIAN") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "canadian" || "Canadian" || "CANADIAN") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "canadian" || "Canadian" || "CANADIAN") {
        $poutinePrice = 17.25;
    }
    elseif ($size == "limited" ||"Limited" || "LIMITED" && $poutineType == "chicken bacon ranch" || "Chicken Bacon Ranch" || "CHICKEN BACON RANCH") {
        $poutinePrice = 12.25;
    }
    elseif ($size == "great" || "Great" || "GREAT" && $poutineType == "chicken bacon ranch" || "Chicken Bacon Ranch" || "CHICKEN BACON RANCH") {
        $poutinePrice = 14.75;
    }
    elseif ($size == "monster" || "Monster" || "MONSTER" && $poutineType == "chicken bacon ranch" || "Chicken Bacon Ranch" || "CHICKEN BACON RANCH") {
        $poutinePrice = 17.25;
    }
    else {
        $sizePrice = 0;
    }
?>