<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $userIDOne = $_POST['userID'];
    $userIDTwo = $_POST['senderID'];

    require_once('dbConnect.php');

    $sql = "UPDATE friends SET status=3
            WHERE userIDone='$userIDOne' AND userIDtwo='$userIDTwo'";

    if ($con->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "fail";
    }
    mysqli_close($con);
}
?>