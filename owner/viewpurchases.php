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
$purchasedate=$_POST["txtpurchasedate"];
$arr_purchases=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from purchases where purchasedate=?");
$stmt->bindParam(1, $purchasedate);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_purchases,$row);
}
$conn=null;
$row=count($arr_purchases);
if($row==0)
{
    echo "<script>alert('No Vegetables Availible');</script>";
}
else
{
    echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Purchase ID</th>";
    echo "<th class=column100 column2 data-column=column2>Farmer ID</th>";
    echo "<th class=column100 column3 data-column=column3>Purchase Date</th>";
    echo "<th class=column100 column4 data-column=column4>Vegetable ID</th>";
    echo "<th class=column100 column4 data-column=column4>Quantity</th>";
    echo "<th class=column100 column4 data-column=column4>Price</th>";
    echo "<th class=column100 column4 data-column=column4>Amount</th>";
    echo "<th class=column100 column4 data-column=column4>Payment Date</th>";
    echo "<th class=column100 column4 data-column=column4>Payment Status</th>";
    echo "</tr>";
    echo "</thead>";
for($i=0;$i<$row;$i++)
{
    echo "<tbody>";
            echo "<tr class=row100>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["purchaseid"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["farmerid"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["purchasedate"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["vegid"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["quantity"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["price"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["amount"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["paymentdate"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_purchases[$i]["paymentstatus"]."</td>";
            echo "</tr>";
}
echo "</table>";
}
?>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>

</html>