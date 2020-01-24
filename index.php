<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            define("URL", "http://www.meusite.com.br");
            define("VERSION", "1.00");

            echo "Meu site é: ".URL;
            echo "<br>A versão do meu site é: ".VERSION;


            //verificações
            echo "<br><br>IF ELSE => Verificações <br><br>";

            $nome = "Erich";
            $idade = 31;

            if($nome == "Erich" && $idade == 32){
                echo "Meu nome esta correto!";
            }
            else{
                echo "Meu nome e idade estão incorretos.";
            }
        ?>
        <hr/>Receber dados de um formulário<br/>
        <?php
            if(isset($_POST['email']) && !empty($_POST['email']))
            {
                if(isset($_POST['senha']) && !empty($_POST['senha']))
                {
                    $email  = $_POST['email'];
                    echo "Meu email é: " .$email;
                    $senha  = $_POST['senha'];
                    echo "<br>Minha senha é: " .$senha;
                }
            }
        ?>
        <hr/>
        <form method="POST">
           <br/> E-Mail:<br/>
            <input type="text" name="email"/> <br/><br/>
            Senha:<br/>
            <input type="password" name="senha"/> <br/><br/>
            <input type="submit" value="Enviar Dados"/><br/><br/>
        </form>
        <hr/>Uso do SWITCH<br/>
        <?php
            $x = 1;
            switch($x)
            {
                case 0:
                    echo "O x é zero.";
                    break;
                case 1:
                case 2:
                    echo "O x esta entre um e dois.";
                    break;
                default:
                    echo "o x não é nada";
                    break;
            }
        ?>
        <hr/>Usando multiplos arquivos PHP<br/>
        <?php
            require "recebedor.php";
        ?>
        <form method="POST">
           <br/> E-Mail:<br/>
            <input type="text" name="email2"/> <br/><br/>
            <input type="submit" value="Enviar Dados"/><br/><br/>
        </form>
        <hr/>Anti F5<br/>
        <?php
            if(isset($_POST['prod']))
            {
                $prod = $_POST['prod'];
                file_put_contents("teste.txt", $nome,FILE_APPEND);
                header("Location: index.php");
            }
        ?>
        <form method="POST">
           <br/> Incluir produto:<br/>
            <input type="text" name="prod"/> <br/><br/>
            
            <input type="submit" value="Enviar Dados"/><br/><br/>
        </form>
    </body>
