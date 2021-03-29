<?php 
    require APPROOT . '/views/component/head.php'
?>

<div class="container">
    <form action="<?php echo URLROOT ?>/pages/update/<?php echo $data['users']->user_id?>" method= "POST">
        <h2>Editar Usuario</h2>
        <div class="form-item">
            <h4>Nome:</h4>
            <input type="text" name="user_name" value="<?php echo $data['users']->user_name?>">
            <h4>CPF:</h4>
            <input type="text" name="user_cpf" value="<?php echo $data['users']->user_cpf?>">
            <h4>Email:</h4>
            <input type="text" name="user_email" value="<?php echo $data['users']->user_email?>">
            <h4>Data de nascimento:</h4>
            <input type="text" name="user_bdate" value="<?php echo $data['users']->user_birthdate?>">
            <h4>Telefone:</h4>
            <input type="text" name="user_phone" value="<?php echo $data['users']->user_phone?>">
        </div>
        <button class="btn" name="submit" type="submit">Salvar</button>
    </form>
</div>