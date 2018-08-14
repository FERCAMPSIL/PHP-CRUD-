<?php

include_once 'connection.php';

$querySelect=$link->query("select*from tb_clientes");
while($registros = $querySelect->fetch_assoc()){
$id=$registros['id'];
$name = $registros['nome'];
$email = $registros['email'];
$phone = $registros['telefone'];

echo "<tr>";
echo"<td>$name</td><td>$email</td><td>$phone</td>";
echo"<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
echo"<td><a href='data/delete.php?id=$id'><i class='material-icons'>delete</i></td>";

echo "</tr>";

}