
<?php
session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>VIEW YOU ORDERS</title>
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
$arr_myorders=array();
$username=null;
$passwd=null;

$orderid=$_REQUEST["param_orderid"];
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select od.orderid,od.vegid,veg.vegname,od.quantity,od.price,od.amount,od.deliverydate,od.status "
        . "from orderdetails od INNER JOIN vegetables veg ON od.vegid=veg.vegid where orderid=?");
$stmt->bindParam(1, $orderid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_myorders,$row);
}
$conn=null;
$row=count($arr_myorders);
if($row==0)
{
    echo "Your Order is Processed";
}
 else
{
     echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Order ID</th>";
    echo "<th class=column100 column2 data-column=column2>Vegetable ID</th>";
    echo "<th class=column100 column3 data-column=column3>Vegetable Name</th>";
    echo "<th class=column100 column4 data-column=column4>Quantity</th>";
    echo "<th class=column100 column5 data-column=column5>Price</th>";
    echo "<th class=column100 column6 data-column=column6>Amount</th>";
    echo "<th class=column100 column7 data-column=column7>Delivery Status</th>";
    echo "<th class=column100 column8 data-column=column8>Status</th>";
    echo "</tr>";
    echo "</thead>";

    for($i=0;$i<$row;$i++)
    {       
        echo "<tbody>";
        echo "<tr class=row100>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["orderid"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["vegid"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["vegname"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["quantity"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["price"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["amount"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["deliverydate"]."</td>";
        echo "<td class=column100 column1 data-column=column1>".$arr_myorders[$i]["status"]."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<br/><br/>";
echo "<a href=custhomeform.php>Back</a>";
}
?>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</html>