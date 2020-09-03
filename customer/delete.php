<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DELETE FROM CART</title>
    </head>
    <body>
        <?php
        $slno=$_REQUEST["param_slno"];
        $username=null;
        $passwd=null;
        $array_delete=array();
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt=$conn->prepare("delete from cart where slno=?");
        $stmt->bindParam(1, $slno);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            array_push($array_delete,$row);
        }
        header("Location:finish.php");
        
        $conn=null;
        ?>
    </body>
</html>