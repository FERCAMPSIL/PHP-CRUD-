<?php session_start()?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <title></title>
</head>
<body>


<nav class="blue-grey">
    <div class="nav-wrapper container">

        <div class="brand-logo light">Sistema de cadastro</div>
        <ul class="right">
            <li><a href="http://"><i class="material-icons left">account_circle</i>Cadastro</a></li>
            <li><a href="http://"><i class="material-icons left">search</i>Consultas</a></li>
          
        </ul>
        </div>
</nav>
<div class="row container">
    <p>&nbsp;</p>
<form action="data/create.php" method="post" class="col s12">
    <fieldset class="formulario">
        <legend><img src="img/Small-mario.png" alt="[img]" width="100"></legend>
        <h5 class="light center ">Cadastro de clientes</h5>

        <?php

            if(isset($_SESSION['msg'])){

                echo $_SESSION['msg'];
                session_unset();
            }

        ?>

        <div class="inpu field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="name" id="name" maxlength="40" required autofocus>
            <label for="name">Nome do cliente </label>
        </div>

        <div class="inpu field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" maxlength="50" required >
            <label for="email">email do cliente </label>
        </div>

        <div class="inpu field col s12">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="phone" id="phone" maxlength="15" required >
            <label for="phone">telefone do cliente </label>
        </div>

        <div class="input field col s12">
            <input type="submit" value="cadastrar" class="btn blue">
            <input type="reset" value="limpar" class="btn red">
        </div>
    </fieldset>


</form>


</div>




<script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){

});
</script>

</body>
</html>