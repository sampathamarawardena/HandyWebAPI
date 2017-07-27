<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    //Getting values
    $name = $_POST['str_name'];
    $email = $_POST['str_email'];
    $Phone = $_POST['str_phone'];
    $uname = $_POST['str_uname'];
    $Pass = $_POST['str_password'];

    //Creating sql query
    $emailCheck = "SELECT * FROM `users` WHERE `email`= '$email'";

    //importing dbConnect.php script
    require_once('dbConnect.php');

    $checkRes = mysqli_query($con, $emailCheck);
    $count = mysqli_num_rows($checkRes);

    if ($count == 0) {
        $sql = "INSERT INTO users (name, email, phone, uname, password)
                VALUES ('$name', '$email', '$Phone','$uname', '$Pass')";

        if ($con->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "fail";
        }
    } else {
        echo "this email exist..! ";
    }

}

?>