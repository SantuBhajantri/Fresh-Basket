<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PAYMENTS</title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body background="images/back.jpg">
        <br/><br/><br/><br/><br/><br/><br/><br/>
            <div class="form-style-6">
                <h1>PAYMENTS</h1>
     
        <form method="POST" action="viewpayments.php">
        
            
                From Date:
                <input type="text" name="txtfromdate" required/>
            
            
                To Date:
                <input type="text" name="txttodate" required/>
                <input type="submit" value="SEARCH"/>
        <br/><br/>
                <input type="reset" value="RESET"/>
            
        
        </form>
    </body>
</html>