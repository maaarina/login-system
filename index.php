<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Initial page</title>
</head>
<body>
    
    <<?php 

        if (!isset($_SESSION['login'])){

            if (isset($_POST['enviar']) ){

                $name = 'Marina';
                $password = '123456';

                $nameForm = $_POST['name'];
                $passwordForm = $_POST['password'];

                if ($name == $nameForm && $password == $passwordForm) {

                    $_SESSION['name'] = $name;
                    header('Location: home.php');
                    exit;
                } else {
                    echo 'Algum erro aconteceu!';
                }
            }

            include('login.php');
        } else {
            include('home.php');
        }

    ?>

</body>
</html>