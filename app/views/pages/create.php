<?php 
    require APPROOT . '/views/component/head.php'
?>

<div class="container">
    <form action="<?php echo URLROOT?>/pages/create" method= "POST">
        <h2>Criar usuario</h2>
        <div class="form-item">
            <h4>Nome:</h4>
            <input type="text" name="user_name" placeholder="Digite o NOME">
            <h4>CPF:</h4>
            <input type="text" name="user_cpf" placeholder="Digite o CPF">
            <h4>Email:</h4>
            <input type="text" name="user_email" placeholder="Digite o EMAIL">
            <h4>Data de nascimento:</h4>
            <input type="text" name="user_bdate" placeholder="Digite a data de nascimento">
            <h4>Telefone:</h4>
            <input type="text" name="user_phone" placeholder="Digite o Telefone">
        </div>
        <button class="btn" name="submit" type="submit">Cadastrar</button>
    </form>
</div>