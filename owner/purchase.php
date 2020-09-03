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
        <title>PURCHASES</title>
    </head>
    <body>
        <form method="POST" action="updatepurchaseform.php">
        <?php
        $vegid=$_POST["ddlvegId"];
        $_SESSION["sess_vegid"]=$vegid;
        $currDate=date('Y/m/d');
        $arr_purchase=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

$stmt1=$conn->prepare("select vegname from vegetables where vegid=?");
$stmt1->bindParam(1,$vegid);
$stmt1->execute();
$row=$stmt1->fetch(PDO::FETCH_ASSOC);

$vegname=$row["vegname"];
$_SESSION["sess_vegname"]=$vegname;

$stmt=$conn->prepare("select fr.farmerid,fr.name as farmername,veg.vegid,veg.vegtype,veg.vegname,"
        . "veg.purchasecost,veg.stock,fc.fromdate,fc.todate from  farmers fr,farmercrops fc,vegetables veg "
        . "where fr.farmerid=fc.farmerid "
        . "and fc.vegid=veg.vegid and veg.vegid=? and ? between fc.fromdate and fc.todate");
$stmt->bindParam(1,$vegid);
$stmt->bindParam(2, $currDate);
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
echo "<th>Farmer ID</th>";
echo "<th>Farmer Name</th>";
echo "</tr>";

for($i=0;$i<$row;$i++)
{
    echo "<tr>";
    echo "<td><input type=checkbox name=chkfarmerid[] value=".$arr_purchase[$i]["farmerid"]."></td>";
    echo "<td>".$arr_purchase[$i]["farmerid"]."</td>";
    echo "<td>".$arr_purchase[$i]["farmername"]."</td>";
    echo "</tr>";
}
echo "</table>";
       
            
echo "<input type=submit value=NEXT>";
           

        ?>
        </form>
    </body>
</html>
