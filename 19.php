<?php
    $n = $_POST['accno'];
    $amt = $_POST['amount'];
    $con = pg_connect(""); // connection string details removed for security
    if (strtolower($_POST['r1'] == "deposit")) {
        $query1 = "update bank set balance = balance + $amt where accno = $n";
    } else {
        $query1 = "update bank set balance = balance - $amt where accno = $n";
    } 
    echo "<h1>Updated Successfully</h1><br><br>";
    $result1 = pg_query($con, $query1);
    $query2 = "select * from bank";
    $result2 = pg_query($con, $query2);
    echo "<table border='2'><tr><td>Account No</td><td>Name</td><td>Amount</td></tr>";
    while ($row1 = pg_fetch_array($result2)) {
        echo "<tr><td>" . $row1['accno'] . "</td><td>" . $row1['cust_name'] . "</td><td>" . $row1['balance'] . "</td></tr>";
    }
    echo "</table>";
    pg_close($con);
?>
