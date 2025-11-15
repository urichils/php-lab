<!-- cookie -->

<!-- PHP program to store current date-time in a cookie and display the last visited date-time on the web page upon revisiting the same web page. -->

<?php 
    $name = "lastvisit";
    $time = time() + 30 * 24 * 60 * 60;
    setcookie($name , date("d/m/y-h:i:s:a"),$time);
    if (isset($_COOKIE[$name])) {
        $visit = $_COOKIE[$name];
        echo "Last visited on : " . $visit;
    } else {
        echo "Cookie not found, this is your first visit!";
    }
?>