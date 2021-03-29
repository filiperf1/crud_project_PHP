<?php require APPROOT . '/views/component/head.php' ?>

<div class="container">
    <div class="container-btn">
        <a href="<?php echo URLROOT?>/pages/create" class="btn">Novo</a>
    </div>
    

    <h3>Lista de cadastrados:</h3>
    <?php foreach($data['users'] as $users): ?>
        <div class="container-item">
            <ul>
                <li><span>Nome: </span><?php echo $users->user_name; ?></li>
                <li><span>CPF:</span> <?php echo $users->user_cpf; ?></li>
                <li><span>Email: </span><?php echo $users->user_email; ?>
                <a href="<?php echo URLROOT . "/pages/update/". $users->user_id?>" class="btn" >Editar</a></li>
                <a href="<?php echo URLROOT . "/pages/info/". $users->user_id?>" class="btn" >Ver</a></li>
                <form action="<?php echo URLROOT . "/pages/delete/". $users->user_id?>" method="POST" class="delete-form">
                    <input type="submit" name="delete" value="Delete" class="btn">
                </form>
            </ul>
        </div>
    <?php endforeach; ?>
</div>