<?php
$userLogin = $_REQUEST['login'];
$userPass = $_REQUEST['pass'];
$userInfo = [];
include("sys/connect.php");
$zapros = "SELECT * FROM `userlist` WHERE  `login`='$userLogin' AND `pass`='$userPass'";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));
if(mysqli_num_rows($result) > 0){
    $userInfo['status'] = "success";
    $loginToken = $userLogin . (string)rand(0,10000000000);
    $userInfo['loginToken'] = $loginToken;
    $zapros = "UPDATE `userlist` SET `loginToken`='$loginToken' WHERE `login`='$userLogin' AND `pass`='$userPass'";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
}else{
    $userInfo['status'] = "false";
}
echo(json_encode($userInfo));
?>