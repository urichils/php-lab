<?php
    $num = $_GET['num'];
    $sum = 0;
    for($i = 1; $i < $num; $i++) {
        if($num % $i == 0)
            $sum = $sum + $i;
    }
    if ($sum == $num)
        echo "$num is a perfect number";
    elseif ($sum > $num)
        echo "$num is an abundant number";
    else
        echo "$num is a deficient number";
?>