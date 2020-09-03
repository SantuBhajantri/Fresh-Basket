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
        <title>BUY ITEMS</title>
    </head>
    <body>
        <?php
        session_start();
            $vegname=$_SESSION["sess_vegname"];
            $vegid=$_SESSION["sess_vegid"];
            $username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);

           $stmt1=$conn->prepare("select purchasecost from vegetables where vegid=?");
$stmt1->bindParam(1,$vegid);
$stmt1->execute();
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
            
$purchasecost=$row["purchasecost"];

            $arr_farmerid=$_POST["chkfarmerid"];
            $currDate=date('Y/m/d');
        ?>
        <form method="POST" action="updatepurchase.php">
            <table border="1">
                <tr>
                    <td>Vegetable Name:</td>
                    <td><input type="text" name="txtvegname" value="<?php echo $vegname;?>"
                    readonly="true"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Vegetable ID:</td>
                    <td><input type="text" name="txtvegid" value="<?php echo $vegid;?>"
                    readonly="true"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Purchase Cost:</td>
                    <td><input type="text" name="txtpurchasecost" value="<?php echo $purchasecost;?>"
                    readonly="true"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Purchase Date:</td>
                    <td><input type="text" name="txtpurchasedate" value="<?php echo $currDate;?>"
                               readonly="true"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Payment Date:</td>
                    <td><input type="text" name="txtpaymentdate" value="<?php echo $currDate;?>"
                               readonly="true"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="txtstatus" value="Pending"/></td>
                </tr>
                
            </table>
        <br/><br/>
        
        <table border="1">
            <tr>
                <th>Farmer ID</th>
                <th>Quantity</th>
            </tr>
            <?php
            for($i=0;$i<count($arr_farmerid);$i++)
            {
                echo "<tr>";
                echo "<td><input type=text name=txtfarmerid[] value=".$arr_farmerid[$i]."></td>";
                echo "<td><input type=text name=txtqty[] required></td>";
                echo "</tr>";
            }
            
            ?>
            
        </table>
        <br/><br/>
                <tr>
                    <td><input type="submit" name="btnsubmit" value="SUBMIT"/></td>
                </tr>  
            </table>
        </form>
    </body>
</html>