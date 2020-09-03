<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BOOK YOUR PURCHASES</title>
    </head>
    <body>
        <?php
        session_start();
        $vegid=$_SESSION["vegid"];
        $arr_farmerid=$_POST["txtfarmerid"];
        $arr_from=$_POST["txtfrom"];
        $arr_to=$_POST["txtto"];
        $arr_qty=$_POST["txtqty"];
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $c=count($arr_from);
        for($i=0;$i<$c;$i++)
        {
            $stmt=$conn->prepare("insert into farmercrops(slno,farmerid,vegid,fromdate,todate,qtycansupply)values(?,?,?,?,?,?)");
            $stmt->bindParam(1,$slno);
            $stmt->bindParam(2,$arr_farmerid[$i]);
            $stmt->bindParam(3,$vegid);
            $stmt->bindParam(4,$arr_from[$i]);
            $stmt->bindParam(5,$arr_to[$i]);
            $stmt->bindParam(6,$arr_qty[$i]);
            if($stmt->execute())
            {
                $msg="<h1>Added Successfully</h1>";
            }
            else 
            {
                $msg="<h1>Not Added</h1>";
            }
        }
        echo $msg;
        ?>
        <br/>
        <a href="selectveg.php">Back</a>
    </body>
</html>
