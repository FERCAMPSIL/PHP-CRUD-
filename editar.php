<?php
 session_start (); 
include_once'include/header.inc.php';
 include_once'include/menu.inc.php';

 
 ?>

    <div class="row container">
        <div class="col s12">
            <h5 class="light">Edição de Registros</h5><hr>
        </div>
    </div>

    <?php
    include_once'data/connection.php';

    $id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id']= $id;
    $querySelect=$link->query("select *from tb_clientes where id='$id'");

    while($registros=$querySelect->fetch_assoc()){
    
        $name=$registros['nome'];
        $email=$registros['email'];
        $phone=$registros['telefone'];
    }
    ?>

    <div class="row container">
    <p>&nbsp;</p>
    <form action="data/update.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding:15px">
        <legend><img src="img/Small-mario.png" alt="[img]" width="100"></legend>
        <h5 class="light center ">Alteração de Cadastro</h5>

        <div class="inpu field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="name" id="name" value="<?php echo $name?>" maxlength="40" required autofocus>
            <label for="name">Nome do cliente </label>
        </div>

        <div class="inpu field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" value="<?php echo $email?>" maxlength="50" required >
            <label for="email">email do cliente </label>
        </div>

        <div class="inpu field col s12">
            <i class="material-icons prefix">phone</i>
            <input type="tel" name="phone" id="phone" value="<?php echo $phone?>" maxlength="15" required >
            <label for="phone">telefone do cliente </label>
        </div>

        <div class="input field col s12">
            <input type="submit" value="alterar" class="btn blue">
            <a href="consultas.php" class="btn red">Cancelar</a>
        </div>
    </fieldset>


</form>
</div>

<?php include_once'include/footer.inc.php'?>
