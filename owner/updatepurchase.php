<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BUY ITEMS</title>
    </head>
    <body>
        <?php
        session_start();
        $arr_farmerid=$_POST["txtfarmerid"];
        $arr_qty=$_POST["txtqty"];
        $purchasecost=$_POST["txtpurchasecost"];
        $purchasedate=$_POST["txtpurchasedate"];
        $vegid=$_POST["txtvegid"];      
        $paymentdate=$_POST["txtpaymentdate"];
        $paymentstatus=$_POST["txtstatus"];
        
        
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
        $c=count($arr_qty);
        $totalstock=0;
        for($i=0;$i<$c;$i++)
        {
            $amount=$arr_qty[$i]*$purchasecost;
            $stmt=$conn->prepare("insert into purchases(farmerid,purchasedate,vegid,quantity,price,amount,paymentdate,paymentstatus)values(?,?,?,?,?,?,?,?)");
            
            $stmt->bindParam(1,$arr_farmerid[$i]);
            $stmt->bindParam(2,$purchasedate);
            $stmt->bindParam(3,$vegid);
            $stmt->bindParam(4,$arr_qty[$i]);
            $stmt->bindParam(5,$purchasecost);
            $stmt->bindParam(6,$amount);
            $stmt->bindParam(7,$paymentdate);
            $stmt->bindParam(8,$paymentstatus);
            if($stmt->execute())
            {
                $msg="Added Successfully";
            }
            else 
            {
                $msg="Not Added";
            }
            $stmt2=$conn->prepare("update vegetables set stock=stock+?,stockavailible=stockavailible+? where vegid=?");
            $stmt2->bindParam(1,$arr_qty[$i]);
            $stmt2->bindParam(2,$arr_qty[$i]);
            $stmt2->bindParam(3,$vegid);
             if($stmt2->execute())
            {
                $msg="<h1>Updated Successfully</h1>";
            }
            else 
            {
                $msg="<h1>Not Updated</h1>";
            }
        }
        echo $msg;
        ?>
        <br/><br/>
        <a href="selectveg.php">Back</a>
    </body>
</html>