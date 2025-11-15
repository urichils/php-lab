<?php
    $name = $_GET['text'];
    $dob = $_GET['txt1'];
    $gender = $_GET['gen'];
    $nationality = $_GET['sel'];
    echo "<table border = 1>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Date of Birth</td><td>$dob</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "<tr><td>Nationality</td><td>$nationality</td></tr>";
    echo "<tr><td>Languages Known </td>";
    echo "<td>";
    if (!empty($_GET['m'])) {
        foreach ($_GET['m'] as $val) {
        echo $val . "<br>";
        }
    } else {
    echo "None";
    }
?>