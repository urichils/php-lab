<?php
    $regno = $_POST['txt'];
    $con = pg_connect(""); // connection string details removed for security
    $query = "select * from result where rollno = '$regno'";
    $result = pg_query($con, $query);
    while ($row = pg_fetch_array($result)) {
        echo "Name = $row[0] <br>";
        echo "Roll No = $row[1] <br>";
        echo "Marks = $row[2] <br>";
        echo "Grade = $row[3] <br>";
    }
    pg_close($con);
?>