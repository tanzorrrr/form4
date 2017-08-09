<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.08.2017
 * Time: 11:58
 */

session_start();
require_once "mysqlconnect.php";
var_dump($_POST);
if(isset($_POST['name'])){
    $name= $_POST['name'];
}

if(isset($_POST['pass'])){
   echo $pass= password_hash($_POST['pass'],PASSWORD_DEFAULT );
}

echo $name;
$sql_query = "SELECT * FROM ussers2 WHERE name='".$name."'AND pass='".$pass."'";
$sql = mysql_query($sql,$link);
var_dump($_POST);
$num_rows = mysql_num_rows($sql);

if($num_rows>0){
    $arr  = mysql_fetch_assoc($sql);

    $_SESSION['id'] =$arr['id'];
    $_SESSION['name']= $arr['name'];
    $_SESSION['pass']= $arr['pass'];
    echo 0;
}else{
    echo 1;
}