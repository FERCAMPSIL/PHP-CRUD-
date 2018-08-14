<?php session_start()?>

<?php include_once'include/header.inc.php'?>

<?php include_once'include/menu.inc.php'?>

<div class="row container">
    <p>&nbsp;</p>
<form action="data/create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding:15px">
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

<?php include_once'include/footer.inc.php'?>




