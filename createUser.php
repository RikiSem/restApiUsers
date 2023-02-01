<?php
$userInfo = array();
error_reporting(0);
if(isset($_REQUEST['email']) && isset($_REQUEST['name']) && isset($_REQUEST['secondName']) && isset($_REQUEST['dateBirth'])){

    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $secondName = $_REQUEST['secondName'];
    $dateBirth = $_REQUEST['dateBirth'];

    $db = explode(".",$dateBirth);
    $userLogin = explode("@",$email)[0];
    $userPass = $db[0] . substr($email,rand(0,strlen($email))-1,5) . $db[1];
    $userInfo['status'] = "success";
    $userInfo['login'] = $userLogin;
    $userInfo['password'] = $userPass;
    include("sys/connect.php");
    $zapros = "INSERT INTO `userlist`(`login`, `pass`, `email`, `name`, `secondName`, `dateBirth`, `loginToken`) VALUES ('$userLogin','$userPass','$email','$name','$secondName','$dateBirth','-')";
    $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
}else{
    $userInfo['status'] = "false";
}
echo(json_encode($userInfo));
?>