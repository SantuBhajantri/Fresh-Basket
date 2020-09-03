<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
    </head>
    <body>
        <?php
        $currentpwd=$_POST["txtcurrentpassword"];
        $newpwd=$_POST["txtnewpassword"];
        $confpwd=$_POST["txtconfirmpassword"];
        
        $loginid=$_SESSION["loginid"];
        $password=$_SESSION["password"];
        if($newpwd==$confpwd)
        {
            $username=null;
            $passwd=null;
            $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
            
            $stmt=$conn->prepare("update users set password=? where loginid=?");
            
            $stmt->bindParam(1,$newpwd);
            $stmt->bindParam(2,$loginid);
            
            if($stmt->execute())
            {
                $msg="Password Changed Successfully";
            }
            else
            {
                 $msg="Password Change Failed";
            }
        }
        else
        {
            $msg="Current Password is Invalid";
        }
        echo "<h1>$msg</h1>";
        
        ?>
    </body>
</html>
