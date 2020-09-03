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
        <title>CROP BOOKINGS</title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="form-style-6">
<h1>CROP BOOKINGS</h1>
<form method="POST" action="viewcropbookings.php">
<input type="text" name="txtfromdate" placeholder="From Date" required/>
<input type="text" name="txttodate" placeholder="To Date" required/>
<input type="submit" value="SEARCH"/>
<br/><br/>
<input type="reset" value="RESET"/>
</form>
</div>
      
        
    </body>
</html>
