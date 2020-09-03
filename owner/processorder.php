<html>
    <head>
        <meta charset="UTF-8">
        <title>PROCESS ORDER</title>
    </head>
    <body>
        <?php
        $orderid=$_REQUEST["param_orderid"];
        $vegid=$_REQUEST["param_vegid"];
        $qty=$_REQUEST["param_qty"];
    $username=null;  
    $passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt1=$conn->prepare("update orderdetails set status='Processed' where orderid=? and vegid=?");
$stmt1->bindParam(1, $orderid);
$stmt1->bindParam(2, $vegid);
if($stmt1->execute())
{
 $stmt2=$conn->prepare("update vegetables set stock=stock-? where vegid=?");
 $stmt2->bindParam(1, $qty);
 $stmt2->bindParam(2, $vegid);
 
 if($stmt2->execute())
{
     $stmt3=$conn->prepare("update vegetables set stockbooked=stockbooked-? where vegid=?");
     $stmt3->bindParam(1, $qty);
     $stmt3->bindParam(2, $vegid);
    if($stmt3->execute())
    {
         echo "<h1>Updated Successfully</h1>";
    }
    else
    {
         echo "<h1>Not Updated</h1>";
    }
}
else
    {
         echo "<h1>Not Updated</h1>";
    }
}
    else
        {
         echo "<h1>Not Updated</h1>";
    }
   ?>
        <br/><br/><br/>
        <a href="index_sm.php">Back</a>
    </body>
</html>
