<?php
session_start();
include_once("includes/db.php");

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login de administradorn</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>


<div class="container">
 
<form action="" class="form-login" method="post">
    
<h2 class="form-login-heading">Iniciar Sessão</h2>

<input type="email" class="form-control" name="admin_email" placeholder="Email" required>
       
<input type="password" class="form-control" name="admin_pass" placeholder="Senha" required>

<button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">ENTRAR</button>
        
</form>   
    
</div>
    
</body>
</html>


<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

echo "<script>alert('Você está logado no painel de administração')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('E-mail ou senha está errado')</script>";

}

}

?>
















