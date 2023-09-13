<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&family=Roboto:wght@500&display=swap" rel="stylesheet">

    <title>Creat your account</title>
</head>
<body>
    <main class="container">    

        <div id="login">
            <h2 class="title-login">Already have an account?</h2>
            <button type="submit" class="button-login">login</button>
        </div>

        <div id="singup">

            <h2 class="title-singup">Not have an account yet? <br> Create now</h2>

            <div class="container">
                <div class="other-login">
                    <p> In</p>
                </div>
                <div class="other-login">
                    <p> G+</p>
                </div>
                <div class="other-login">
                    <p> Git</p>
                </div>
            </div>

            <p class="container">------------------ OR ------------------</p>

            <form action="" method="post" id="form">

                <input type="text" name="name" id="name" placeholder="Name" required>

                <input type="email" name="email" id="email" placeholder="Email" required>

                <input type="password" name="password" id="password" placeholder="Password" required>

                <div class="container">
                    <button type="submit" name="enviar" class="button-singup">Entry</button>
                </div>

            </form>

        </div>
    </main>
</body>
</html>
