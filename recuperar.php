<?php
    include('MySql.php');
    session_start();
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
<section class="redefinir">
    <div class="redefinicao">
    <?php

    if(isset($_POST['acao'])){
        //Recuperar senha
        $token = uniqid();
        $_SESSION['token'] = $token;
        $_SESSION['email'] = $_POST['email'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.membros` WHERE email = ?");
        $sql->execute(array($_POST['email']));
        if($sql->rowCount() == 1){
        
?>
<div class="area">
</div>

<div class="area">
    <div class="solicitou">
        <h2>Você fez uma solicitação de nova senha!</h2>
        <a href="recuperar.php?token=<?php echo $_SESSION['token']; ?>">Clique aqui para redefinir</a>
    </div>
</div>
<?php } //O email não existe
if($sql->rowCount() == 0){ ?>
<h2>Ops!, Parece que o seu email não existe.</h2>
<?php
    }}else if(isset($_GET['token'])){
        $token = $_GET['token'];
        if($token != $_SESSION['token']){
        die('O token não é válido.');
    }else{ ?>

    <div class="redefinir-senha">
        <h2>Redefinir senha</h2>
        <form method="post">
            <input type="hidden" name="email" value="<?php echo $_SESSION['email'] ?>" />
            <input type="password" name="password" />
            <input type="submit" name="redefinir" value="Redefinir" />
        </form>
    </div>

<?php
    }}
?>

    </div>
</section>
</body>
</html>