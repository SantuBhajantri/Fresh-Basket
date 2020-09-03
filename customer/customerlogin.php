<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CUSTOMER LOGIN</title>
    </head>
    <body>
        
<?php
     
   session_start();
 
       $name=$_POST["txtname"];
   
     $phone=$_POST["txtphone"];
 
       $username=null;
      
  $passwd=null;
      
  $array_customers=array();
      
  $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
   
     $stmt=$conn->prepare("select * from customers where name=? and phone=?");
 
       $stmt->bindParam(1, $name);
     
   $stmt->bindParam(2, $phone);
  
      $stmt->execute();

        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
   
     {

            array_push($array_customers, $row);

      }
 
       $c=count($array_customers);
      
  $conn=null;
     
   if($c==0)
  
      {
   
         echo "<script>alert('Invalid Login');</script>";
    
    }
     
   else
   
     {
            $_SESSION["name"]=$name;
  
          $_SESSION["phone"]=$phone;
    
        $_SESSION["custid"]=$array_customers[0]["custid"];
   
         header("Location:custhomeform.php");
     
   }

$conn=null;
       
 ?>
   
 </body>

</html>