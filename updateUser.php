<?php
include("sys/connect.php");
$userInfo = [];
try{
    $loginToken = $_REQUEST['loginToken'];
}
catch(Exception $exp){
    echo($exp);
}
try{
    $changeField = $_REQUEST['changeField'];
}
catch(Exception $exp){
    echo($exp);
}
try{
    $changeValue = $_REQUEST['changeValue'];
}
catch(Exception $exp){
    echo($exp);
}
$zapros = "UPDATE `userlist` SET `$changeField`='$changeValue' WHERE `loginToken`='$loginToken'";
$result = mysqli_query($link,$zapros) or die(mysqli_error($link));
if($result == true){
    $userInfo['status'] = $result;
    $userInfo['changeField'] = $changeField;
    $userInfo['changeValue'] = $changeValue;
}else{
    $userInfo['status'] = $result;
}
echo(json_encode($userInfo));
?>