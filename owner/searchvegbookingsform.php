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
        <title>SEARCH VEGETABLE BOOKINGS</title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body background="images/back.jpg">
    <form method="POST" action="searchvegbookings.php">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="form-style-6">
<h1>VEGETABLE BOOKINGS</h1>

<input type="text" name="txtsupplydate" placeholder="Supply Date" required/>
<select name='ddlvegId'>
    <?php
    //select vegid,vegname from vegetables
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
<input type="submit" value="SEARCH"/>
<br/><br/>
<input type="reset" value="RESET"/>
</form>
</div>
    </body>
</html>