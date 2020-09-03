<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include './header_pm.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SELECTION OF VEGETABLES</title>
    </head>
    <body>
        <?php
        $arr_vegetables=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select vegid,vegname from vegetables");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_vegetables,$row);
}
$conn=null;
$row=count($arr_vegetables);
echo "<table border=1>";
echo "<tr>";
echo "<th>Vegetable ID</th>";
echo "<th>Vegetable Name</th>";
echo "</tr>";
for($i=0;$i<$row;$i++)
{
    $vid=$arr_vegetables[$i]["vegid"];
    echo "<tr>";
    echo "<td>";
    echo "<a href=bookpurchase.php?param_vid=$vid>$vid</a>";
    echo "<td>".$arr_vegetables[$i]["vegname"]."</td>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
        ?>
    </body>
</html>
