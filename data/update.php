<?php


session_start (); 
include_once'connection.php';
$id= $_SESSION['id'];

$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate=$link->query("update tb_clientes set nome='$name', email='$email', telefone='$phone' where id='$id'");
$affected_rows=mysqli_affected_rows($link);
if($affected_rows>0){

    header("location:../consultas.php");
}


