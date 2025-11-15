<?php
    $username = $_POST['txt'];
    $password = $_POST['txt2'];
    $con = pg_connect(""); // connection string details removed for security
    $qry = "select * from login where username = '$username' and password = '$password'";
    $result = pg_query($con, $qry);
    $num = pg_num_rows($result);
    if ($num)
        echo "$username you have successfully logged in";
    else
        echo "login failed";
    pg_close($con);
?>