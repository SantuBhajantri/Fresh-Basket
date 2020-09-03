<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CUSTOMER REGISTRATION</title>
    </head>
    <body>
        <?php
        $name=$_POST["txtname"];
        $address=$_POST["txtaddress"];
        $phone=$_POST["txtphone"];
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("insert into customers(custid,name,address,phone)values(?,?,?,?)");
        $stmt->bindParam(1, $custid);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $address);
        $stmt->bindParam(4, $phone);
        if($stmt->execute())
        {
            echo "<script>alert('Added Successfully');</script>";
            header("Location:index.php");
        }
        else 
        {
            echo "<script>alert('Not Added');</script>";
        }
$conn=null;
        ?>
    </body>
</html>
