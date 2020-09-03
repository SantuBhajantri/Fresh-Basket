
<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>
        <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
    </body>
<?php
$custid=$_SESSION["custid"];
$arr_cart=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from cart where custid=?");
$stmt->bindParam(1, $custid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_cart,$row);
}
$conn=null;
$row=count($arr_cart);
if($row==0)
{
    echo "<h1>No Items on Your Cart</h1>";
}

else
{
    echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Sl No</th>";
    echo "<th class=column100 column2 data-column=column2>Customer ID</th>";
    echo "<th class=column100 column3 data-column=column3>Vegetable ID</th>";
    echo "<th class=column100 column4 data-column=column4>Quantity</th>";
    echo "<th class=column100 column5 data-column=column5>Cost</th>";
    echo "<th class=column100 column6 data-column=column6>Amount</th>";
    echo "<th class=column100 column7 data-column=column7>Order</th>";
    echo "</tr>";
    echo "</thead>";
				
    for($i=0;$i<$row;$i++)
    {
        echo "<tbody>";
	echo "<tr class=row100>";
	echo "<td class=column100 column1 data-column=column1>".$arr_cart[$i]["slno"]."</td>";
	echo "<td class=column100 column2 data-column=column2>".$arr_cart[$i]["custid"]."</td>";
        echo "<td class=column100 column3 data-column=column3>".$arr_cart[$i]["vegid"]."</td>";
        echo "<td class=column100 column4 data-column=column4>".$arr_cart[$i]["quantity"]."</td>";
        echo "<td class=column100 column5 data-column=column5>".$arr_cart[$i]["cost"]."</td>";
        echo "<td class=column100 column6 data-column=column6>".$arr_cart[$i]["amount"]."</td>";
        echo "<td class=column100 column7 data-column=column7><a href=finish.php>Order</a></td>";
	echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
    echo "</table>";
}
echo "<br/><br/>";
echo "<a href=custhomeform.php>Back</a>";
?>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>

</html>