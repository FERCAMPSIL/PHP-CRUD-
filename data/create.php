<?php

include_once 'connection.php';

$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("select email from tb_clientes");
$array_email=[];

