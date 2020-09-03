<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './header_admin.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CREATION OF USERS</title>
        <link rel="stylesheet" href="css/drop.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/>
        <div class="form-style-5">
<form method="POST" action="createuser.php">
<fieldset>
<legend><span class="number"></span>Creation of Users</legend>
<input type="text" name="txtloginid" placeholder="LOGIN ID" required>
<input type="password" name="txtpassword" placeholder="PASSWORD" required>
<input type="password" name="txtconfirmpassword" placeholder="CONFIRM PASSWORD" required>
<label for="role">Select Role:</label>
<select id="role" name="txtrole">
  <option value="admin">Administrator</option>
  <option value="purchasemanager">Purchase Manager</option>
  <option value="sales">Sales</option>
</select>      
</fieldset>
<input type="submit" value="CREATE" name="txtcreate"/>
<input type="reset" value="RESET" name="txtreset"/>
</form>
</div>
    </body>
</html>
