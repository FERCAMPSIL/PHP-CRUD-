<?php

session_start();

include_once 'connection.php';

$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("select email from tb_clientes");
$array_emails=[];

while($emails = $querySelect->fetch_assoc()){
    $emails_existentes = $emails['email'];
    array_push($array_emails,$emails_existentes);
}

if(in_array($email,$array_emails)){

    $_SESSION['msg']="<p class='center red-text'>". 'ja existe um cliente cadastrado com essse email'."</p>";
    header("location: ../");
}else{
    $queryInsert=$link->query("insert into tb_clientes values(default,'$name','$email', '$phone')");
    $affected_rows=mysqli_affected_rows($link);
    
    if($affected_rows>0){
        $_SESSION['msg']="<p class='center green-text'>".'Cadastro realizado com sucesso!'."</br>";
        header("location: ../");
    }
}



