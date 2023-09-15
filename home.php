<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    
<?php 
    session_start(); 

    if (isset($_SESSION['name'])) {
        echo '<h1 class="title"> Welcome, ' . $_SESSION['name'] . '!' . '</h1>';

    } else {
        // Redirecione para a página de login se a variável de sessão não estiver definida
        header('Location: index.php');
        exit;
    }
?>

</body>
</html>