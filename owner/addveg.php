<?php
$vegtype=$_POST["txtvegtype"];
$vegname=$_POST["txtvegname"];
$purchasecost=$_POST["txtpurchasecost"];
$sellingcost=$_POST["txtsellingcost"];
$image=$_FILES["image"]["name"];
$tmp_dir=$_FILES["image"]["tmp_name"];
if(empty($image))
{
    echo "Please select document File";
    echo "<br/>";
}
else
{
    $upload_docDir="VegImg/";
    $image=$upload_docDir.$image;
    move_uploaded_file($tmp_dir, $image);
}

$username=null;
$passwd=null;
$conn=new PDO("mysql:host=localhost;dbname=test",$username,$passwd);
$stmt=$conn->prepare("insert into vegetables(vegid,vegtype,vegname,purchasecost,sellingcost,stock,stockbooked,stockavailible,image)values(?,?,?,?,?,0,0,0,?)");
$stmt->bindParam(1,$vegid);
$stmt->bindParam(2,$vegtype);
$stmt->bindParam(3,$vegname);
$stmt->bindParam(4,$purchasecost);
$stmt->bindParam(5,$sellingcost);
$stmt->bindParam(6, $image);
if($stmt->execute())
{
   echo "<h1>Added Successfully</h1>";
}
 else 
{
     echo "<h1>Not Added</h1>";
}
$conn=null;
?>