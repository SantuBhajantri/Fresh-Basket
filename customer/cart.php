<?php
include './header.php';
?>

<?php
echo "<br/><br/><br/><br/><br/>";
session_start();
$vegid=$_POST["txtvegid"];
$vegname=$_POST["txtvegname"];
$qty=$_POST["txtqty"];
$cost=$_POST["txtcost"];
$custid=$_SESSION["custid"];
$amt=$qty*$cost;
$vegtype=$_SESSION["vegtype"];
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into cart(custid,vegid,quantity,cost,amount)values(?,?,?,?,?)");
$stmt->bindParam(1, $custid);
$stmt->bindParam(2, $vegid);
$stmt->bindParam(3, $qty);
$stmt->bindParam(4, $cost);
$stmt->bindParam(5, $amt);
if($stmt->execute())
{
    $msg="Added To Cart";
}
 else 
{
     $msg="Failed in Adding to Cart";
}
echo "<h1>$msg</h1>";
echo"<br/>";
echo"<br/>";
$conn=null;
 
echo "<a href=custhome.php?ddlvegtype=$vegtype>Back</a>";
echo "<br/><br/>";
echo "<td><a href=finish.php>Finish</a></td>";
?>