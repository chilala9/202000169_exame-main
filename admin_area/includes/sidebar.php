<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>windw.open('login.php','_self')</script>";
}

else{
     

?>



<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->
    
<span class="sr-only">Toggle Navigation </span>

<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
   
    
</button> <!--navbar-ex1-collpase start-->
<a href="index.php?dashboard" class="navbar-brand">Painel de Administrador</a>    
    
</div>  <!-- navbar-header start-->
   
<ul class="nav navbar-right top-nav"><!--nav navbar-right top-nav start-->

<li class="dropdown"><!--dropdown start-->
    
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--dropdown-toggl start-->
<i class="fa fa-user"></i> 
<?php   echo $admin_name; ?> <b class="caret"></b>    
</a>  <!--dropdown-toggl start-->
<ul class="dropdown-menu"><!--dropdown menu starts-->
<li>

<a href="index.php?user_profile=<?php echo $admin_id; ?>">
<i class="fa fa-fw fa-user"></i>Perfil    
</a>
        
</li> 
   
<li>

<a href="index.php?view_products>">
<i class="fa fa-fw fa-envelope"></i>Produtos  
<span class="badge"><?php echo $count_products; ?></span>  
</a>
        
</li> 
   
<li>

<a href="index.php?view_customers">
<i class="fa fa-users"></i>Clientes    
<span class="badge"><?php echo $count_customers; ?></span>
</a>
        
</li> 
   
<li>

<a href="index.php?view_cats">
<i class="fa fa-fw fa-gear"></i>Categorias de Produtos   
<span class="badge"><?php echo $count_p_categories; ?></span> 
</a>
        
</li>  

<li class="divider"></li> 
<li>
<a href="../index.php">
<i class="fa fa-link"></i>Ir ao Site  
</a>

<li class="divider"></li> 
<li>
<a href="logout.php">
<i class="fa fa-fw fa-power-off"></i>Sair  
</a>    
    
</li>    
</ul>    <!--dropdown menu starts-->
</li>    <!--dropdown start-->
  
</ul><!--nav navbar-right top-nav stop-->
    
 <div class="collapse navbar-collapse navbar-ex1-collapse"><!--collapse navbar-collapse navbar-ex1-collapse start-->
  <ul class="nav navbar-nav side-nav"><!--nav navbar-nav side-nav starts-->
      
  <li>
      
    <a href="index.php?dashboard">
    <i class="fa fa-fw fa-dashboard"></i>  Painel 
    </a>  
      
  </li>
  <li>
  <a href="#" data-toggle="collapse" data-target="#products">
 <i class="fa fa-fw fa-table"></i>Produtos 
 <i class="fa fa-fw fa-caret-down"></i>
  </a>
  
  <ul id="products" class="collapse">
    
    <li>
    <a href="index.php?insert_product">Inserir Produtos</a>    
    </li>
     
       <li>
    <a href="index.php?view_products">Ver Produtos</a>    
    </li>
     
      
  </ul>
      </li>
      
      
     <li>
  <a href="#" data-toggle="collapse" data-target="#p_cat">
 <i class="fa fa-fw fa-pencil"></i>Categorias  de Produtos 
 <i class="fa fa-fw fa-caret-down"></i>
  </a>
  
  <ul id="p_cat" class="collapse">
    
    <li>
    <a href="index.php?insert_p_cat">Inserir Categoria  de Produtos </a>    
    </li>
     
       <li>
    <a href="index.php?view_p_cats">Ver Categoria de Produtos </a>    
    </li>
     
      
  </ul>
      </li>
      
      
      
     <li>
  <a href="#" data-toggle="collapse" data-target="#cat">
 <i class="fa fa-fw fa-arrows-v"></i>Categoria  
 <i class="fa fa-fw fa-caret-down"></i>
  </a>
  
  <ul id="cat" class="collapse">
    
    <li>
    <a href="index.php?insert_cat">Inserir Categoria</a>    
    </li>
     
       <li>
    <a href="index.php?view_cats">Ver Categorias</a>    
    </li>
     
      
  </ul>
      </li>
      
                    
                    
        
     <li>
  <a href="#" data-toggle="collapse" data-target="#slides">
 <i class="fa fa-fw fa-gear"></i>Banners  
 <i class="fa fa-fw fa-caret-down"></i>
  </a>
  
  <ul id="slides" class="collapse">
    
    <li>
    <a href="index.php?insert_slide">Inserir Banners</a>    
    </li>
     
       <li>
    <a href="index.php?view_slides">Ver Banners</a>    
    </li>
     
      
  </ul>
      </li>

      
      
 
 <li>
    <a href="index.php?view_customers">
    <i class="fa fa-fw fa-edit"></i>Ver Clientes 
        
    </a> 
     
 </li>










                    
 <li>
    <a href="index.php?view_orders">
    <i class="fa fa-fw fa-list"></i>Ver Pedidos    
        
    </a> 
     
 </li>

 <li>
    <a href="index.php?view_payments">
    <i class="fa fa-fw fa-pencil"></i>Ver Pagamentos 
        
    </a> 
     
 </li>
                    
        
     <li>
  <a href="#" data-toggle="collapse" data-target="#users">
 <i class="fa fa-fw fa-gear"></i>Usuários 
 <i class="fa fa-fw fa-caret-down"></i>
  </a>
  
  <ul id="users" class="collapse">
    
    <li>
    <a href="index.php?insert_user">Inserir Usuário</a>    
    </li>
     
       <li>
    <a href="index.php?view_users">Ver Usuários</a> 
    
    </li>
    
    <li>
      <a href="index.php?user_profile=<?php echo $admin_id; ?>">Editar Perfil</a> 
    </li>
     
      
  </ul>
      </li>
                    
  
   <li><!--li start-->
    <a href="logout.php">
    <i class="fa fa-fw fa-power-off"></i> Sair
    </a>   
       
   </li><!--li start-->
                    
  </ul>   <!--nav navbar-nav side-nav starts-->
     
 </div><!--collapse navbar-collapse navbar-ex1-collapse start-->
    
    
</nav> <!--navbar navbar-inverse navbar-fixed-top stop-->




<?php } ?>