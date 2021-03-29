<?php require APPROOT . '/views/component/head.php' ?>

<div class="container">
    <h3> Informações do Usuário:</h3>
    <div class="container-info">
        <ul>
            <li><span>Nome: </span><?php echo $data['users']->user_name; ?></li>
            <li><span>CPF:</span> <?php echo $data['users']->user_cpf; ?></li>
            <li><span>Email: </span><?php echo $data['users']->user_email; ?></li>
            <li><span>Data de Nascimento: </span><?php echo $data['users']->user_birthdate; ?></li>
            <li><span>Telefone: </span><?php echo $data['users']->user_phone; ?></li>
            <a href="<?php echo URLROOT?>" class="btn">Voltar</a>
        </ul>
    </div>
    
</div>