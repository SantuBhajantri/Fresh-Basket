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
        <form method="POST" action="bookpurchasenext.php">
        <?php
        session_start();
        $arr_vegetables=array();
        $vegid=$_REQUEST["param_vid"];
        $_SESSION["vegid"]=$vegid;
        ?>
        <table>
            <tr>
                <td>Veg ID:</td>
                <td><input type="text" name="txtvegid" value="<?php echo $vegid;?>"
                           readonly="true"/></td>
            </tr>
        </table>
            <br/><br/>
            <?php
            $arr_farmers=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select farmerid,name from farmers");
$stmt->bindParam(1,$farmerid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_farmers,$row);
}
$conn=null;
$row=count($arr_farmers);
echo "<table border=1>";
echo "<tr>";
echo "<th>Select</th>";
echo "<th>Farmer ID</th>";
echo "<th>Farmer Name</th>";
echo "</tr>";
for($i=0;$i<$row;$i++)
{
    echo "<tr>";
    echo "<td><input type=checkbox name=chkfarmerid[] value=".$arr_farmers[$i]["farmerid"]."</td>";
    echo "<td>".$arr_farmers[$i]["farmerid"]."</td>";
    echo "<td>".$arr_farmers[$i]["name"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br/><br/>";
echo "<input type=submit value=SUBMIT>";
            ?>
        </form>
    </body>
</html>