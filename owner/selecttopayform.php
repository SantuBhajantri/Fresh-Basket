<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './header_pm.php';
?>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SELECT TO PAY</title>
    </head>
    <body>
        <form method="POST" action="selecttopay.php">
        <?php
        $arr_purchase=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select purchaseid from purchases where paymentstatus='Pending'");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_purchase,$row);
}
$conn=null;
$row=count($arr_purchase);
echo "<table border=1>";
echo "<tr>";
echo "<th>Select</th>";
echo "<th>Purchase ID</th>";
echo "</tr>";
for($i=0;$i<$row;$i++)
{
    $purchaseid=$arr_purchase[$i]["purchaseid"];
    echo "<tr>";
    echo "<td><input type=checkbox name=chkpurchaseid[] value=".$purchaseid."></td>";
    echo "<td>".$arr_purchase[$i]["purchaseid"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<input type=submit value=UPDATE>";
        ?>
        </form>
    </body>
</html>