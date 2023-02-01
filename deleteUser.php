<?php
$userLogin = $_REQUEST['login'];
$userInfo = [];
include("sys/connect.php");
$zapros = "DELETE FROM `userlist` WHERE `login`='$userLogin'";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));
$userInfo['status'] = "success";
echo(json_encode($userInfo));
?>