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
    
<?php
$custid=$_SESSION["custid"];
$array_finish=array();
$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("select * from cart where custid=?");
$stmt->bindParam(1, $custid);
$stmt->execute();
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    array_push($array_finish,$row);
}
$conn=null;
$row=count($array_finish);
if($row==0)
{
    echo "<h1>No Items on Your Cart</h1>";
    echo "<br/><br/>";
    echo "<a href=custhomeform.php>Back</a>";
}

else
{
    echo "<form method=POST action=checkout.php>";
    echo "<div class=table100 ver5 m-b-110>";
    echo "<table data-vertable=ver5>";
    echo "<thead>";
    echo "<tr class=row100 head>";
    echo "<th class=column100 column1 data-column=column1>Delete</th>";
    echo "<th class=column100 column2 data-column=column2>Sl No</th>";
    echo "<th class=column100 column3 data-column=column3>Customer ID</th>";
    echo "<th class=column100 column4 data-column=column4>Vegetable ID</th>";
    echo "<th class=column100 column5 data-column=column5>Quantity</th>";
    echo "<th class=column100 column6 data-column=column6>Cost</th>";
    echo "<th class=column100 column7 data-column=column7>Amount</th>";
    echo "</tr>";
    echo "</thead>";
				
    for($i=0;$i<$row;$i++)
    {
        echo "<tbody>";
	echo "<tr class=row100>";
        $slno=$array_finish[$i]["slno"];
        echo "<td class=column100 column1 data-column=column1><a href=delete.php?param_slno=$slno>DELETE</td>";
	echo "<td class=column100 column1 data-column=column1>".$array_finish[$i]["slno"]."</td>";
	echo "<td class=column100 column2 data-column=column2>".$array_finish[$i]["custid"]."</td>";
        echo "<td class=column100 column3 data-column=column3>".$array_finish[$i]["vegid"]."</td>";
        echo "<td class=column100 column4 data-column=column4>".$array_finish[$i]["quantity"]."</td>";
        echo "<td class=column100 column5 data-column=column5>".$array_finish[$i]["cost"]."</td>";
        echo "<td class=column100 column6 data-column=column6>".$array_finish[$i]["amount"]."</td>";
	echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
    echo "</table>";
    echo "<input type=submit value=CHECKOUT>";
    echo "</form>";
}

?>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
        
</html>