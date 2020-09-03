<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$name=$_POST["txtfarmername"];
$phone=$_POST["txtphoneno"];
$village=$_POST["txtvillage"];
$pincode=$_POST["txtpincode"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into farmers(farmerid,name,phone,village,pincode)values(?,?,?,?,?)");
$stmt->bindParam(1, $farmerid);
$stmt->bindParam(2, $name);
$stmt->bindParam(3, $phone);
$stmt->bindParam(4, $village);
$stmt->bindParam(5,$pincode);
if($stmt->execute())
{
    echo "<script>alert('Added Successfully');</script>";
}
 else 
{
     echo "<script>alert('Not Added');</script>";
}
$conn=null;
?>