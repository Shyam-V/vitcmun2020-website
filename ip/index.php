<?php
session_start();
require_once('config.php');
$_SESSION['a']=0;
$_SESSION['v']=0;
$_SESSION['preference_1']=NULL;
$_SESSION['preference_2']=NULL;
header("Location:screening.php");
?>
