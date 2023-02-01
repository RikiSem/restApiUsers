<?php
try{
    $userLogin = $_REQUEST['login'];
}
catch(Exception $exp){
    echo($exp);
}
include("sys/connect.php");
$zapros = "SELECT * FROM `userlist` WHERE `login`='$userLogin'";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));
$userInfo = mysqli_fetch_assoc($result);
echo(json_encode($userInfo));
?>