<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SEARCH VEGETABLE BOOKINGS</title>
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
        $supplydate=$_POST["txtsupplydate"];
        $vegid=$_POST["ddlvegId"];
        $arr_vegbookings=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select fr.farmerid,fr.name as farmername,veg.vegid,veg.vegtype,veg.vegname,"
        . "veg.purchasecost,veg.stock,fc.fromdate,fc.todate from  farmers fr,farmercrops fc,vegetables veg "
        . "where fr.farmerid=fc.farmerid "
        . "and fc.vegid=veg.vegid and veg.vegid=? and ? between fc.fromdate and fc.todate");
$stmt->bindParam(1,$vegid);
$stmt->bindParam(2, $supplydate);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($arr_vegbookings,$row);
}
$conn=null;
$rows=count($arr_vegbookings);
echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Farmer ID</th>";
    echo "<th class=column100 column2 data-column=column2>Farmer Name</th>";
    echo "<th class=column100 column3 data-column=column3>Vegetable ID</th>";
    echo "<th class=column100 column4 data-column=column4>Vegetable Type</th>";
    echo "<th class=column100 column4 data-column=column4>Vegetable Name</th>";
    echo "<th class=column100 column4 data-column=column4>Purchase Cost</th>";
    echo "<th class=column100 column4 data-column=column4>Stock</th>";
    echo "<th class=column100 column4 data-column=column4>From Date/th>";
    echo "<th class=column100 column4 data-column=column4>To Date</th>";
    echo "</tr>";
    echo "</thead>";
    
for($i=0;$i<$rows;$i++)
{
    echo "<tbody>";
            echo "<tr class=row100>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["farmerid"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["farmername"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["vegid"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["vegtype"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["vegname"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["purchasecost"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["stock"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["fromdate"]."</td>";
            echo "<td class=column100 column2 data-column=column2>".$arr_vegbookings[$i]["todate"]."</td>";
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