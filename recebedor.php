<?php
    if(isset($_POST['email2']) && !empty($_POST['email2']))
    {
        $email2  = $_POST['email2'];
        echo "Meu email é: " .$email2;
    }