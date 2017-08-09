<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07.08.2017
 * Time: 16:31
 */

require_once "mysqlconnect.php";
if(isset($_POST['name'])){
    $name= $_POST['name'];
}

if(isset($_POST['pass'])){
    $pass= password_hash($_POST['pass'],PASSWORD_DEFAULT );
}

$sql =  mysql_query("INSERT INTO `ussers2`(name,pass)VALUES('". $name."','".$pass."')",$link);
echo $pass;

if($sql ==true){
    echo 0;
    return 0;
}else{
    echo 1;
    return 1;
}

