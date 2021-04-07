<?php 
    require APPROOT . '/views/component/head.php'
?>

<div class="container">
    <div class="create-content">
        <a href="<?php echo URLROOT?>" class="btn">Voltar</a>
        <h3>Criar usuario</h2>
        <form action="<?php echo URLROOT?>/pages/create" method= "POST">
            <div class="form-item">
                <p>Nome:</p>
                <input type="text" name="user_name" placeholder="Digite o NOME">
                <p>CPF:</p>
                <input type="text" name="user_cpf" placeholder="Digite o CPF">
                <p>Email:</p>
                <input type="text" name="user_email" placeholder="Digite o EMAIL">
                <p>Data de nascimento:</p>
                <input type="text" name="user_bdate" placeholder="Digite a data de nascimento">
                <p>Telefone:</p>
                <input type="text" name="user_phone" placeholder="Digite o Telefone">
            </div>
            <button class="btn" name="submit" type="submit">Cadastrar</button>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/component/footer.php' ?>