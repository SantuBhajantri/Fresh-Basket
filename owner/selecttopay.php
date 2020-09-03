<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SELECT TO PAY</title>
    </head>
    <body>
        <?php
        $arr_purchaseid=$_POST["chkpurchaseid"];
        $c=count($arr_purchaseid);
        $username=null;  
        $passwd=null;
        for($i=0;$i<$c;$i++)
        {
        $purchaseid=$arr_purchaseid[$i];
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $stmt1=$conn->prepare("update purchases set paymentstatus='Paid' where purchaseid=?");
        $stmt1->bindParam(1, $purchaseid);
        if($stmt1->execute())
        {
            $msg="<h1>Updated Successfully</h1>";
            echo "<br/><br/>";
        }
         else
         {
             $msg="<h1>Not Updated</h1>";
             echo "<br/><br/>";
         }
         echo "<br/><br/>";
         $arr_amount=array();
         $stmt3=$conn->prepare("select amount from purchases where purchaseid=?");
         $stmt3->bindParam(1,$purchaseid);
         $stmt3->execute();
         while($row=$stmt3->fetch(PDO::FETCH_ASSOC))
         {
             array_push($arr_amount, $row);
         }

         $paidamount=$arr_amount[0]["amount"];
         $paiddate=date('Y/m/d');

         $stmt2=$conn->prepare("insert into payment(purchaseid,paidamount,paiddate)values(?,?,?)");
         $stmt2->bindParam(1,$purchaseid);
         $stmt2->bindParam(2,$paidamount);
         $stmt2->bindParam(3,$paiddate);
         if($stmt2->execute())
         {
             $msg1="<h1>Inserted</h1>";
             echo "<br/><br/>";
         }
         else
         {
             $msg1="<h1>Not Inserted</h1>";
             echo "<br/><br/>";
         }
        }
        echo $msg;
        echo $msg1;
         ?>
            </body>
        </html>