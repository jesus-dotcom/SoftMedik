<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion = $_SESSION['Nickname_Usuario'];
if($varsesion == null || $varsesion ==''){
  header('location: index.php');
  die();
}