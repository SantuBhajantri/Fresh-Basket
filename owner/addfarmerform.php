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
        <title>ADD FARMER</title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/><br/>
        <div class="form-style-6">
            <h1>ADD FARMER</h1>
            <form method="POST" action="addfarmer.php">
                <input type="text" name="txtfarmername" placeholder="Farmer Name" required/>
                <input type="text" name="txtphoneno" placeholder="Phone Number" required/>
                <input type="text" name="txtvillage" placeholder="Village" required/>
                <input type="text" name="txtpincode" placeholder="Pin Code" required/>
                <input type="submit" value="CREATE"/>
                <br/>
                <input type="reset" value="RESET"/>
            </form>
    </body>
</html>
