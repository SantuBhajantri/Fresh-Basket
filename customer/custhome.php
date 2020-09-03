<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<?php
include './header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CUSTOMER HOME</title>
    </head>
    <body>
        
        <br/><br/><br/>
        <?php
        $vegname=$_SESSION["sess_vegname"];
        $sellingcost=$_SESSION["sess_sellingcost"];
        $vegtype=$_REQUEST["ddlvegtype"];
        $_SESSION["vegtype"]=$vegtype;
        $currDate=date('Y/m/d');
        $arr_veg=array();
        $username=null;
        $passwd=null;
        $conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

        $stmt1=$conn->prepare("select vegid, vegname,sellingcost,image from vegetables where vegtype=?");
        $stmt1->bindParam(1,$vegtype);
        $stmt1->execute();
        while($row=$stmt1->fetch(PDO::FETCH_ASSOC))
        {
            array_push($arr_veg,$row);
        }
        $c=count($arr_veg);


        for($i=0;$i<$c;$i++)
        {
            echo "<form method=POST action=cart.php>";
            $vegname=$arr_veg[$i]["vegname"];
            $vegid=$arr_veg[$i]["vegid"];
            $sellingcost=$arr_veg[$i]["sellingcost"];
            $image="../owner/".$arr_veg[$i]["image"];

            echo "<table>";

            echo "<tr>";
            echo "<td colspan=2><img src=$image height=208 width=300/></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Vegetable ID</td>";
            echo "<td><input type=text readonly value=$vegid name=txtvegid /></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Vegetable Name</td>";
            echo "<td><input type=text readonly value=$vegname name=txtvegname /></td>";
            echo "</tr>";
            echo "<br/>";

            echo "<tr>";
            echo "<td>Cost</td>";
            echo "<td><input type=text readonly value=$sellingcost name=txtcost /></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Quantity Needed</td>";
            echo "<td><input type=number  name=txtqty required /></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Delivery Date</td>";
            echo "<td><input type=date  name=txtdeliverydate required /></td>";
            echo "</tr>";
            echo "</table>";

            echo "<p align=left>";
            echo "<input type=submit value=ADD />";
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            echo "<a href=finish.php>FINISH</a>";
            echo "</p>";

            echo "<hr/>";
            echo "</form>";
        }

        ?>
            </body>
        </html>