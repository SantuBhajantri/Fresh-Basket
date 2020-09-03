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
        <title>BOOK YOUR PURCHASES</title>
    </head>
    <body>
        <?php
        session_start();
        $vegid=$_SESSION["vegid"];
        $arr_farmerid=$_POST["chkfarmerid"];
        ?>
        <form method="POST" action="bookpurchasefinal.php">
        <table>
            <tr>
                <th>Farmer ID</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Quantity Can Supply</th>
                
            </tr>
            <?php
            for($i=0;$i<count($arr_farmerid);$i++)
            {
                echo "<tr>";
                echo "<td><input type=text name=txtfarmerid[] value=".$arr_farmerid[$i]." readonly></td>";
                echo "<td><input type=date name=txtfrom[] required></td>";
                echo "<td><input type=date name=txtto[] required></td>";
                echo "<td><input type=text name=txtqty[] required></td>";
                echo "</tr>";
            }
            
            ?>
            </table>
            
            <input type="submit" value="SUBMIT"/>
        
    </form>
    </body>
</html>
