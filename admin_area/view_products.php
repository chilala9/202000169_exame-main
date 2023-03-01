<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>windw.open('login.php','_self')</script>";
}

else{
     

?>



<div class="row"> <!-- 1st row starts-->

<div class="col-lg-12"> <!-- col-lg-12 starts-->
    
<ol class="breadcrumb"> <!-- breadcrumb starts-->

<li class="active">
    
    <i class="fa fa-dashboard"></i> Painel / Ver Produtos
    
</li>    
    
</ol><!-- breadcrumb starts-->
    
</div>  <!-- col-lg-12 starts-->
    
    
</div> <!-- 1st row starts-->

<div class="row"><!-- 2nd row starts-->
 
<div class="col-lg-12"><!-- col-lg-12 starts-->
  
<div class="panel panel-default"> <!-- panel panel-default starts-->
  
<div class="panel-heading"> <!-- panel heading starts-->
    
<h3 class="panel-title">
    <i class="fa fa-money fa-fw"></i>Ver Produtos
   
</div>   <!-- panel heading starts-->

<div class="panel-body"> <!--panel-body starts-->
 
<div class="table-responsive"> <!--table-responsive starts-->
  
<table class="table table-bordered table-hover table-stripped">
    
<thead>
    
<tr>
<th>ID do produto</th>
    <th>Título do produto</th>
     <th>Imagem do produto</th>
     <th>Preço do produto</th>
     <th>Produto vendido</th>
     <th>Quantidade do produto</th>
      <th>chave do produto</th>
       <th>Data do produto</th>
        <th>Excluir produto</th>
        <th>Estado</th>
         <th>Editar</th>
         
    
</tr>
    
</thead>
       
 <tbody>
     <?php
     $i=0;
     $get_pro = "select * from products";
     $run_pro = mysqli_query($con,$get_pro);
     while($row_pro=mysqli_fetch_array($run_pro)){
         
         $pro_id=$row_pro['product_id'];
         $pro_title=$row_pro['product_title'];
         $pro_image=$row_pro['product_img1'];
         $pro_price=$row_pro['product_price'];
         $pro_qty=$row_pro['product_quantity'];
         $pro_keywords=$row_pro['product_keywords'];
         $pro_date=$row_pro['date'];
         $pro_status=$row_pro['status'];
         $i++;
         
         
     
     ?>
     
     <tr>
         <td>
             <?php echo $i; ?>
         </td>
             
         <td>
             <?php echo $pro_title; ?>
         </td>
         
         <td><img src="product_images/<?php echo $pro_image; ?>" alt="" width="60" height="60"></td>
         
         <td> 
             <?php echo  $pro_price; ?>
             
         </td> 
         <td>
             <?php  
             $get_sold="select * from pending_orders where product_id='$pro_id'";
             
             $run_sold= mysqli_query($con,$get_sold);
             $count=mysqli_num_rows($run_sold);
             echo $count;
             
             ?>
         </td>
         
          
         <td>
            <?php echo $pro_qty ; ?>
         </td>
         
         
         <td>
            <?php echo $pro_keywords ; ?>
         </td>
         
         <td>
             <?php echo $pro_date ; ?>
             
         </td>

         <td>
             <?php echo $pro_status ; ?>
             
         </td>
         
         <td>
             <a href="index.php?delete_product=<?php echo $pro_id;?>">
                 <i class="fa fa-trash-o"> Eliminar</i>
             </a>
         </td>
         
           <td>
             <a href="index.php?edit_product=<?php echo $pro_id;?>">
                 <i class="fa fa-pencil"> Editar</i>
             </a>
         </td>
         
     </tr>
     
     
     
     <?php } ?>
 </tbody>
        
</table>  
    
</div>   <!--table-responsive starts-->
    
</div>    <!--panel-body starts-->
            
</div>  <!-- panel panel-default starts-->
    
</div>   <!-- col-lg-12 starts-->
    
</div><!-- 2nd row starts-->


















<?php } ?>