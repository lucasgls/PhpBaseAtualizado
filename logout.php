<?php

session_start();

unset($_SESSION['id']);

header('location:loginv2.php');

?>