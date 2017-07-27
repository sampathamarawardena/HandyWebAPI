<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $userIDOne = $_POST['userID'];
    $userIDTwo = $_POST['senderID'];

    require_once('dbConnect.php');

    $sql = "INSERT INTO friends (userIDone, userIDtwo, status)
                VALUES ('$userIDOne', '$userIDTwo', '1')";

    if ($con->query($sql) === TRUE) {
            echo "success";
    } else {
            echo "fail";
    }
    mysqli_close($con);
}
?>