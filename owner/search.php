<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SEARCH PROCESSED ORDERS</title>
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
        $date=$_POST["txtdate"];
$username=null;
$passwd=null;
$array_process=array();
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select c.custid,c.name,c.address,c.phone,o.orderid,o.orderdate,od.vegid,v.vegname,"
        . "od.quantity,od.price,od.amount,od.deliverydate,od.status from orders o INNER JOIN customers c ON "
        . "c.custid=o.custid INNER JOIN orderdetails od "
        . "ON o.orderid=od.orderid INNER JOIN vegetables v ON od.vegid=v.vegid where "
        . "deliverydate=? and status='New Order'");
$stmt->bindParam(1, $date);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_process, $row);
}
$row=count($array_process);
$conn=null;
echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Order ID ID</th>";
    echo "<th class=column100 column2 data-column=column2>Vegetable ID</th>";
    echo "<th class=column100 column3 data-column=column3>Vegetable Name</th>";
    echo "<th class=column100 column4 data-column=column4>Customer ID</th>";
    echo "<th class=column100 column4 data-column=column4>Customer Name</th>";
    echo "<th class=column100 column4 data-column=column4>Address</th>";
    echo "<th class=column100 column4 data-column=column4>Phone</th>";
    echo "<th class=column100 column4 data-column=column4>Order Date/th>";
    echo "<th class=column100 column4 data-column=column4>Quantity</th>";
    echo "<th class=column100 column4 data-column=column4>Price</th>";
    echo "<th class=column100 column4 data-column=column4>Amount</th>";
    echo "<th class=column100 column4 data-column=column4>Delivery Date</th>";
    echo "<th class=column100 column4 data-column=column4>Status</th>";
    echo "</tr>";
    echo "</thead>";

for($i=0;$i<$row;$i++)
{
    $orderid=$array_process[$i]["orderid"];
    $vegid=$array_process[$i]["vegid"];
    $qty=$array_process[$i]["quantity"];
    echo "<tbody>";
    echo "<tr class=row100>";
    echo "<td class=column100 column2 data-column=column2><a href=processorder.php?param_orderid=$orderid&param_vegid=$vegid&param_qty=$qty>$orderid</a></td>";    
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["vegid"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["vegname"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["custid"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["name"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["address"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["phone"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["orderdate"]."</td>"; 
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["quantity"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["price"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["amount"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["deliverydate"]."</td>";
    echo "<td class=column100 column2 data-column=column2>".$array_process[$i]["status"]."</td>";
    echo "</tr>";
}
echo "</table>";
        ?>
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</html>