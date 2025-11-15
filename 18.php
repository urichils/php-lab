<?php
    $code = $_POST['txt1'];
    $name = $_POST['txt2'];
    $price = $_POST['txt3'];
    $con = pg_connect(""); // connection string details removed for security
    if ($con) {
        $query = "insert into product values ('$code', '$name', $price)";
        $result1 = pg_query($con, $query);
        if (pg_affected_rows($result1) == 1) {
            echo "Record added successfully <br>";
            $query1 = "select * from product";
            $result2 = pg_query($con, $query1);
            echo "<html>";
            echo "<body>";
            echo "<table border=1>";
            echo "<tr><th>Item code:</th><th>Name</th><th>Price:</th></tr>";
            while ($row = pg_fetch_array($result2)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
            }
            echo "</table>";
            echo "</body>";
            echo "</html>";
        }
    }
    pg_close($con);
?>

