<?php
    include('MySql.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Esqueci Minha Senha</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="logar">
        <div class="area">
        </div>
        <div class="area">
            <h2>Olá <br />seja bem vindo</h2>
            <form method="post" action="recuperar.php">
                <label>Email</label>
                <input type="email" placeholder="example@gmail.com" name="email" />
                <input type="submit" name="acao" value="Recuperar" />
            </form>

        </div><!--area-->
    </section><!--logar-->
</body>
</html>