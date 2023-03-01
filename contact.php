<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
<title>CASA DOS RELÓGIOS</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-success btn-sm" >
<?php

if(!isset($_SESSION['customer_email'])){

echo "Bem-Vindo:Convidado";


}else{

echo "Bem-Vindo : " . $_SESSION['customer_email'] . "";

}


?>
</a>


</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->

<li>
<a href="customer_register.php">
Cadastrar
</a>
</li>




<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php'> Entrar </a>";

}else {

echo "<a href='logout.php'> Sair </a>";

}

?>
</li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->


<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

<span class="sr-only" >Toggle Search</span>

<i class="fa fa-search" ></i>

</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li>
<a href="index.php"> casa </a>
</li>

<li>
<a href="shop.php"> loja </a>
</li>

<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >Minha Conta</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>Minha Conta</a>";

}


?>
</li>

<li>
<a href="cart.php"> carrinho </a>
</li>

<li class="active" >
<a href="contact.php"> Contatos </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>

<span> <?php $dados_p = $dados_p = items();
if ($dados_p['qtd'] != 0) {
    echo $dados_p['qtd'];
};
?>  itens no carrinho </span>

</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input class="form-control" type="text" placeholder="Pesquisar" name="user_query" required>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" ><!-- breadcrumb Starts -->

<li>
<a href="index.php">Casa</a>
</li>

<li>Contatos</li>

</ul><!-- breadcrumb Ends -->






<div class="col-md-9" ><!-- col-md-9 Starts -->

<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center><!-- center Starts -->

<h2>Nos Contate</h2>

<p class="text-muted" >
Se você tiver alguma dúvida, sinta-se à vontade para entrar em contato conosco, nosso centro de atendimento ao cliente está trabalhando para você 24 horas por dia, 7 dias por semana.
</p>

</center><!-- center Ends -->

</div><!-- box-header Ends -->

<form action="contact.php" method="post" ><!-- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Nome</label>

<input type="text" class="form-control" name="name" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>Email</label>

<input type="text" class="form-control" name="email" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Assunto</label>

<input type="text" class="form-control" name="subject" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label> Mensagem </label>

<textarea class="form-control" name="message"> </textarea>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"></i> Enviar Mensagem

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

<?php

if(isset($_POST['submit'])){

// Admin receives email through this code

$sender_name = $_POST['name'];

$sender_email = $_POST['email'];

$sender_subject = $_POST['subject'];

$sender_message = $_POST['message'];

$receiver_email = "zihad.24bd@gmail.com";

mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

// Send email to sender through this code

$email = $_POST['email'];

$subject = "Bem vindo ao meu site";

$msg = "Vou te responder em breve, obrigado por nos enviar um e-mail
";

$from = "carvalhojose298@gmail.com";

mail($email,$subject,$msg,$from);

echo "<h2 align='center'>Sua mensagem foi enviada com sucesso</h2>";

}


?>

</div><!-- box Ends -->

</div><!-- col-md-9 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>