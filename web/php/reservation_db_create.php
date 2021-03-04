<?php 
session_start();
$arrive_date = $_SESSION['start-date'];
$departure_date = $_SESSION['end-date'];
$_SESSION['adualts-number']= $_POST['adualts-number'];
$_SESSION['child-number']= $_POST['child-number'];

$adult = $_SESSION['adualts-number'];
$child = $_SESSION['child-number'];