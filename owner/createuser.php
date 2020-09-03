<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$loginid=$_POST["txtloginid"];
$password=$_POST["txtpassword"];
$confirmpassword=$_POST["txtconfirmpassword"];
$role=$_POST["txtrole"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
if($password==$confirmpassword)
{
    $stmt=$conn->prepare("insert into users(loginid,password,role)values(?,?,?)");
    $stmt->bindParam(1,$loginid);
    $stmt->bindParam(2,$password);
    $stmt->bindParam(3,$role);
    if($stmt->execute())
    {
       echo "<script>alert('Added Successfully');</script>";
    }
     else 
    {
         echo "<script>alert('Not Added');</script>";
    }
}
else
{
    echo "Password is Wrong";
}
$conn=null;
?>