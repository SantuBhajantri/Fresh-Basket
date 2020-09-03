<?php
include './link_owner.php';
?>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="#">Fresh Basket</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
          <li class="active"><a href="#">Home</a></li>
        <li><a class="drop" href="#">View</a>
          <ul>
              <li><a href="viewfarmers.php">View Farmers</a></li>
              <li><a href="viewvegetables.php">View Vegetables</a></li>
              <li><a href="viewcustomers.php">View Customers</a></li>
              <li><a href="viewpurchasesform.php">View Purchases</a></li>
              <li><a href="viewpaymentsform.php">View Payments</a></li>
          </ul>
        </li>
        <li><a href="createuserform.php">Create Purchase Manager and Sales Manager</a></li>
        <li><a href="changepasswordform.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>