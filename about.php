<?php

include("includes/db.php");
//include("functions/Functions.php");


?>






<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <title>CASA DOS RELÓGIOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="styles/style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    
    <div id="top">  <!-- top bar start-->
        
     <div class="container"> <!-- container start-->
         
    <div class="col-md-6 offer"> <!-- col-md-6 offer start-->
        
        <a href="#" class="btn btn-success btn-sm">
            
            BEM-VINDO Convidado!
        </a>
        
 
        
    </div>     <!-- col-md-6 offer stop-->
        
        <div class="col-md-6 ">
            
            <ul class="menu">
                
                <li>
                    
                    <a href="customer_registration.php">Cadastrar</a>
                    
                </li>
                
                 <li>

                    
                    <a href="login.php">Entrar</a>
                    
                </li>
                
            </ul>
            
        </div>
         
     </div> <!-- container stop-->
        
        
    </div>   <!-- top bar stop-->
    
    <div class="navbar navbar-default " id="navbar"> <!-- navbar navbar-default start-->
       <div class="container">
           
           <div class="navbar-header"> <!-- navbar-header start-->
           
               
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" >
                 <span class="sr-only"  >Toggle Navigation</span>   
                   <i class="fa fa-align-justify"></i>
               </button>
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                  <span class="sr-only"></span>
                  <i class="fa fa-search"></i>
                   
                   
               </button>
               
           </div> <!-- navbar-header stop-->
           
           <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse start-->
               
               <div class="padding-nav"> <!-- padding-nav start-->
                   
                   <ul class="nav navbar-nav navbar-left">
                       <li class="">
                           <a href="index.php">casa</a>
                           
                       </li>
                       <li>
                           <a href="shop.php">loja</a>
                           
                       </li>
                       <li >
                           <a href="customer/my_account.php">Minha conta</a>
                           
                       </li>
                        
                       <li>
                           <a href="cart.php">carrinho</a>
                           
                       </li>
                       <li  class="active">
                           <a href="about.php">sobre nós</a>
                           
                       </li>
                       
                       <li>
                           <a href="services.php">serviços</a>
                           
                       </li>
                       
                       <li>
                           <a href="contact.php">Contatos</a>
                           
                       </li>
                       
                   </ul>
                   
               </div>  <!-- padding-nav stop-->
               
               <a href="cart.php" class="btn btn-primary navbar-btn right">
                   <i class="fa fa-shopping-cart">
                       
                       
                   </i>
                   <span>items in Cart</span>
               </a>
               <div class="navbar-collapse collapse right">  <!-- navbar-collapse collapse-right start-->
                   
                   <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                       <span class="sr-only">Toggle Search</span>
                       <i class="fa fa-search"></i>
                   </button>
               </div>  <!-- padding-nav stop-->
               
               <div class="collapse clearfix " id="search">
                   
                  <form class="navbar-form" method="get" action="result.php">
                      
                      <div class="input-group">
                         
                         <input type="text" name="user_query" placeholder="Pesquisar" class=" form-control" required="">
                         <span class="input-group-btn">
                         
                        <button type="submit" value="Search" name="search" class="btn btn-primary">
                            
                           <i class="fa fa-search"></i> 
                        </button>
                         </span>
                          
                      </div>
                      
                  </form> 
                   
               </div>
               
               
               
           </div> <!-- navbar-collapse collapse-right stop-->
           
       </div> 
        
    </div> <!--navbar navbar-default stop-->
    
   
  
 
<div id="content">
    <div class="container"> <!--container start-->
        <div class="col-md-12"><!--col-md-12 start-->
            <ul class="breadcrumb">
                <li>
                    <a href="home.php">Casa</a>
                </li>
                <li>
                   Sobre Nós
                </li>
            </ul>
        </div> <!--col-md-12 stop-->
        <div class="col-md-3"> <!--col-md-3 start-->
        
        </div> <!--col-md-3 stop-->
        
       
      
     <div class="col-md-9">
         
         <h1>Conheça-nos</h1>
         
         <p>
         É muito importante que o cliente esteja atento ao processo de adipiscagem. 
         Conduzimos, como que cegos pelo seu prazer, a distinção deleita-lhe muito prazer,
          e a opção de suportar o doce erro de menos agruras, eles desconhecem. Mais áspero, 
          vou explicar. É muito importante que o cliente esteja atento ao processo de adipiscagem. 
          O prazer de receber cai, de fato, ele procura ser aceito pela lisonja, pela recusa das coisas, 
          que é justamente a distinção da maneira gentil que conduzimos? Isso atrapalha a verdade, repele 
          o erro escolhido dos bem-aventurados? Pois os trabalhos devem ser repelidos com grande ódio e desejo,
           e explicarei que, cegos pela culpa, os aceitaremos; Prazer, a menos? De fato, é mantido. Para ser 
           repelido, tudo menos, o prazer de suportá-los em si? Eles não sabem o que impede qualquer vantagem, 
           evitar ser, rejeitar a grande coisa quando, em tempos cegos, procura o objeto do corpo. Deixe estar. 
           É muito importante que o cliente esteja atento ao processo de adipiscagem. Eles fornecem sua rejeição, 
           e muitas vezes deixam por muito tempo para serem rejeitados, e todas as dores com as quais nascem,
          isso é menos. Além disso, estou livre do fardo dos deveres das coisas!
             
         </p>
         
     </div>
   
  
 










     
    </div><!--container stop-->
    
</div><!--content stop-->







        
    <!--footer start-->
    <?php
    include("includes/footer.php");
    ?>
     <!--footer stop-->
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</body>
</html>