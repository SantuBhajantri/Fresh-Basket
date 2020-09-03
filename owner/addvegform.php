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
        <title>ADD VEGETABLES</title>
        <link rel="stylesheet" href="css/drop.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/>
        <div class="form-style-5">
            <form method="POST" action="addveg.php" enctype="multipart/form-data">
<fieldset>
<legend><span class="number"></span>Adding of Vegetables</legend>
<label for="role">Vegetable Type:</label>
<select id="vegtype" name="txtvegtype">
  <option value="leafyvegetables">Leafy Vegetables</option>
  <option value="cereals">Cereals</option>
  <option value="rawveg">Raw Vegetables</option>
</select>
<input type="text" name="txtvegname" placeholder="Vegetable Name" required/>
<input type="text" name="txtpurchasecost" placeholder="Purchase Cost" required/>
<input type="text" name="txtsellingcost" placeholder="Selling Cost" required/>
<input type="file" name="image" required/>
</fieldset>
<input type="submit" value="ADD" name="txtadd"/>
<input type="reset" value="CANCEL" name="txtcancel"/>
</form>
</div>
    </body>
</html>