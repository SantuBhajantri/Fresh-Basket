<?php
    session_start();
	session_destroy();
	unset($_SESSION['loginid']);
        unset($_SESSION['password']);
	header("Location:http://localhost/FreshBasket/main.php");
?>