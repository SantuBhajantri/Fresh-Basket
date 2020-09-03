<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$loginid=$_POST["txtloginid"];
$password=$_POST["txtpassword"];
$username=null;
$passwd=null;
$array_login=array();
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from users where loginid=? and password=?");
$stmt->bindParam(1,$loginid);
$stmt->bindParam(2,$password);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_login,$row);
}
$role=$array_login[0]["role"];
if($role=='admin')
{
    $_SESSION["loginid"]=$loginid;
    $_SESSION["password"]=$password;
    header("Location:index_admin.php");
}
else if($role=='purchasemanager')
{
    header("Location:index_pm.php");
}
else if($role=='sales')
{
    header("Location:index_sm.php");
}
 else
 {
     echo "<script>alert('Invalid Selection');</script>";
 }
?>