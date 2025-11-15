<?php
    $tar_dir = "";
    $tar_file = $tar_dir.basename($_FILES['fileupload']['name']);
    $upok = 1;
    $imageFileType = strtolower(pathinfo($tar_file,PATHINFO_EXTENSION));
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['fileupload']['tmp_name']);
        if ($check !== false) {
            echo "File is an image: ".$check['mime']."<br>";
            $upok = 1;
        } else {
            echo "file is not an image";
            $upok = 0;
        }
    }
    if ($upok == 0) {
        echo "File is not uploaded";
    } elseif (move_uploaded_file($_FILES['fileupload']['tmp_name'],$tar_file)) {
        echo "File uploaded<br><br>";
        echo "<img src = $tar_file alt=image width=400 height=350>";
    } else {
        echo "Error";
    }
?>