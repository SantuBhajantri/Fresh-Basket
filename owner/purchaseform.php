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
        <title>PURCHASES</title>
        <link rel="stylesheet" href="css/drop.css">
    </head>
    <body>
        <br/><br/><br/><br/><br/>
        <div class="form-style-5">
        <form method="POST" action="purchase.php">
            Search Vegetable:
<select name='ddlvegId'>
    <?php
    $arr_vegid=array();
    $username=null;
$passwd=null;

$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select vegid,vegname from vegetables");
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_vegid,$row);
}
$rows=count($arr_vegid);

    for($i=0;$i<$rows;$i++)
    {
        echo "<option value=".$arr_vegid[$i]["vegid"].">".$arr_vegid[$i]["vegname"]."</option>";
    } 
    
    ?>
</select>
            <br/><br/>
            <input type="submit" value="SEARCH"/>
        </form>
        </div>
    </body>
</html>