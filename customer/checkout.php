<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CHECK OUT</title>
    </head>
    <body>
        <?php
        $array_cart=array();
        $array_cartrows=array();
        $totalamount=0;
        $tax=0;
        $netamount=0;
        $orderid=0;
        $orderdate=null;
        $status="New Order";
        // fetch custid from session
        $custid=$_SESSION["custid"];
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        //find totalamount from cart based on custid
        $stmt=$conn->prepare("select sum(amount) as totalamount from cart where custid=?");
        $stmt->bindParam(1, $custid);
        if($stmt->execute())
        {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($array_cart,$row);
            }
            //get the amount
            $totalamount=$array_cart[0]["totalamount"];
            //get system date
            $orderdate=date("y/m/d");
            //insert into orders table
            $stmtorders=$conn->prepare("insert into orders(custid,orderdate,totalamount)values(?,?,?)");
            $stmtorders->bindParam(1, $custid);                                 
            $stmtorders->bindParam(2, $orderdate);  
            $stmtorders->bindParam(3, $totalamount); 
            if($stmtorders->execute())
            {
                //insert into orderdetails table
                //get orderid generated
                $orderid=$conn->lastInsertId();
                //get all rows from cart table and store in array
                $stmtcart=$conn->prepare("select * from cart where custid=?");
                $stmtcart->bindParam(1, $custid);
                if($stmtcart->execute())
                {
                    while($row=$stmtcart->fetch(PDO::FETCH_ASSOC))
                    {
                        array_push($array_cartrows,$row);
                    }
                    //insert into orderdetails using $array_cartrows
                    for($i=0;$i<count($array_cartrows);$i++)
                    {
                        $stmtorderdetails=$conn->prepare("insert into orderdetails(orderid,vegid,quantity,price,amount,deliverydate,status)values(?,?,?,?,?,?,?)");
                        $stmtorderdetails->bindParam(1,$orderid);
                        $stmtorderdetails->bindParam(2,$array_cartrows[$i]["vegid"]);
                        $stmtorderdetails->bindParam(3,$array_cartrows[$i]["quantity"]);
                        $stmtorderdetails->bindParam(4,$array_cartrows[$i]["cost"]);
                        $stmtorderdetails->bindParam(5,$array_cartrows[$i]["amount"]);
                        $stmtorderdetails->bindParam(6,$orderdate);
                        $stmtorderdetails->bindParam(7,$status);
                        $stmtorderdetails->execute();
            
                        $stmt1=$conn->prepare("update vegetables set stockbooked=stockbooked+? where vegid=?");
                        $stmt1->bindParam(1,$array_cartrows[$i]["quantity"]);
                        $stmt1->bindParam(2,$array_cartrows[$i]["vegid"]);
                        $stmt1->execute();
            
                        $stmt2=$conn->prepare("update vegetables set stockavailible=stockavailible-? where vegid=?");
                        $stmt2->bindParam(1,$array_cartrows[$i]["quantity"]);
                        $stmt2->bindParam(2,$array_cartrows[$i]["vegid"]);
                        $stmt2->execute();
                    }
                    //delete all rows from cart based on custid
                    $stmtdel=$conn->prepare("delete from cart where custid=?");
                    $stmtdel->bindParam(1,$custid);
                    if($stmtdel->execute())
                    {
                        $msg="Ordered";
                        echo "<br/><br/>";
                        echo "<h1>$msg</h1>";
                    }
                    else
                    {
                        $msg="Order Failed";
                        echo "<br/><br/>";
                        echo "<h1>$msg</h1>";
                    }
                }
                else 
                { 
                    $msg="Order Failed";
                    echo "<br/><br/>";
                    echo "<h1>$msg</h1>";
                }
            }
            else 
            {
                $msg="Order Failed";
                echo "<br/><br/>";
                echo "<h1>$msg</h1>";
            }
        }
        ?>
        <br/><br/>
        <a href="custhomeform.php">Back</a>
    </body>
</html>