<?php
    $name = $_POST['t1'];
    $basic = $_POST['t2'];
    $ds = $_POST['designation'];
    $convergence = 0;
    $extra = 0;
    if ($ds == "Manager") {
        $convergence = 1000;
        $extra = 500; 
    } elseif ($ds == "Supervisor") {
        $convergence = 750;
        $extra = 200;
    } elseif ($ds == "Clerk") {
        $convergence = 500;
        $extra = 100;
    } elseif ($ds == "Peon") {
        $convergence = 50;
        $extra = 0;
    }
    $hra = 0.20 * $basic;
    $gross = $basic + $hra + $convergence + $extra;
    
    if ($gross <= 200) {
        $tax = 0;
    } elseif ($gross > 2000 && $gross <= 4000) {
        $tax = $basic * 0.03;
    } elseif ($gross > 4000 && $gross <= 5000) {
        $tax = $basic * 0.05;
    } else {
        $tax = $basic * 0.08;
    } 
    $net = $gross - $tax;
    echo "<h1>Payslip</h1>";
    echo "Name: $name <br>";
    echo "Basic Salary: $basic <br>";
    echo "Designation: $ds <br>";
    echo "HRA: $hra <br>";
    echo "Gross Salary: $gross <br>";
    echo "Tax: $tax <br>";
    echo "Net Salary: $net <br>";
?>