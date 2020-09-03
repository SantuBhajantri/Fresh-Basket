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
              <li><a href="viewcropbookingsform.php">View Crop Bookings</a></li>
              <li><a href="viewpurchasesform.php">View Purchases</a></li>
              <li><a href="viewpaymentsform.php">View Payments</a></li>
              <li><a href="searchvegbookingsform.php">View Vegetable Bookings</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Add</a>
          <ul>
              <li><a href="addfarmerform.php">Add Farmers</a></li>
              <li><a href="addvegform.php">Add Vegetables</a>
            </li>
          </ul>
        </li>
        <li><a href="selectveg.php">Select Vegetables</a></li>
        <li><a href="purchaseform.php">Purchase from Farmers</a></li>
        <li><a href="selecttopayform.php">Select to Pay</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>