<?php  

    foreach ($data['users'] as $users) {    
        echo "Information: " . $users->user_name . ' ' . $users->user_email;
        echo '<br>';
    }

?>