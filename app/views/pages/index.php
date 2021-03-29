<?php require APPROOT . '/views/component/head.php' ?>

<div class="container">
    <div class="container-btn">
        <a href="<?php echo URLROOT?>/pages/create" class="btn">Novo</a>
        <a href="<?php echo URLROOT?>/pages/delete" class="btn">Deletar</a>
    </div>
    

    <h3>Lista de cadastrados:</h3>
    <?php foreach($data['users'] as $users): ?>
        <div class="container-item">
            <ul>
                <li><span>Nome: </span><?php echo $users->user_name; ?></li>
                <li><span>CPF:</span> <?php echo $users->user_cpf; ?></li>
                <li><span>Email: </span><?php echo $users->user_email; ?></li>
                <a href="<?php echo URLROOT?>/pages/update" class="btn" >Editar</a>
            </ul>
        </div>
    <?php endforeach; ?>
</div>