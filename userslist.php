<?php
require_once('dbConnect.php');

$SQL = "SELECT * FROM users";

$results = array();

$res = mysqli_query($con, $SQL);

while ($row = mysqli_fetch_array($res)){
    array_push($results, array('id'=>$row['id'],'name'=>$row['name'],'email'=>$row['email']));
}

echo json_encode(array("result"=>$results));

mysqli_close($con);




?>