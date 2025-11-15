<?php
    $fruits = array("Apple", "Mango", "Banana", "Kiwi", "Pineapple","Orange","Grapes","Mango","Watermelon","Plums");
    echo "<u>Contents in the array using foreach</u><br>";
    foreach ($fruits as $value) {
        echo "<br>$value";
    }
    echo "<u><br><br>Array in sorted order</u>";
    sort ($fruits);
    foreach ($fruits as $value) {
        echo "<br>$value";
    }
    echo "<u><br><br>Array without duplicates</u>";
    $fruits = array_unique($fruits);
    foreach($fruits as $value) {
        echo "<br>$value";
    }
    echo "<u><br><br>Array after deleting last element</u>";
    array_pop($fruits);
    foreach ($fruits as $value) {
        echo "<br>$value";
    }
    echo "<br><u><br>Array in reverse order</u>";
    $fruits = array_reverse($fruits);
    foreach ($fruits as $value) {
        echo "<br>$value";
    }
    echo "<u><br><br>Search an element</u>";
    $element = $_POST['txt'];
    if (array_search($element, $fruits) >= 0) {
        echo "\n<br><br>Element found at ".array_search($element, $fruits);
    } else {
        echo "Element not found";
    }
?>