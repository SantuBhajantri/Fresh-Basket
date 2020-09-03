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
        <title>CHANGE PASSWORD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="form-style-6">
        <h1>CHANGE PASSWORD</h1>
        <form method="POST" action="changepassword.php">
            
                    Current Password:
                    <input type="password" name="txtcurrentpassword" required/>
                
                
                    New Password
                    <input type="password" name="txtnewpassword" required/>
                
                
                    Confirm Password
                    <input type="password" name="txtconfirmpassword" required/>
                
                
                    <input type="submit" value="CHANGE" name="txtbtnchange"/>
                
            
        </form>
    </body>
</html>
