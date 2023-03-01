<?php



if(!isset($_SESSION['admin_email'])){
    echo "<script>windw.open('login.php','_self')</script>";
}

else{

?>
 










<div class="row"> <!--1st row start-->
 
<div class="col-lg-12"><!--col-lg-12 start-->
     <ol class="breadcrumb"><!--breadcrumb start-->
    <li class="active">
        <i class="fa fa-dashboard"></i> Painel
    </li>   
   </ol>  <!--breadcrumb start-->
    
</div>   <!--col-lg-12 start-->
    
</div> <!--1st row start-->


<div class="row"><!--2nd row start-->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6start-->
    
<div class="panel panel-primary"><!--panel-panel-primary start-->

<div class="panel-heading"><!--panel-heading start-->

<div class="row"> <!--panel row starts-->
    
 <div class="col-xs-3"><!--col-xs-3starts-->
  <i class="fa fa-tasks fa-5x"></i>   
 </div>   <!--col-xs-3starts-->
   
<div class="col-xs-9 text-right"> <!--col-xs-9 text-right starts-->

<div class="huge">
<?php echo $count_products ;?>    
</div>
<div>Produtos</div>   
    
</div> <!--col-xs-9 text-right starts-->
    
</div><!--panel row starts-->
        
    
</div>   <!--panel-heading start--> 

<a href="index.php?view_products">

<div class="panel-footer"><!--panel-footer starts-->

<span class="pull-left">Ver mais..</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix">
    
</div>
                
</div>  <!--panel-footer starts-->      
    
</a>    
    
</div><!--panel-panel-primary start-->
   
</div><!--col-lg-3 col-md-6start-->

   

   
<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6start-->
    
<div class="panel panel-green"><!--panel-panel-primary start-->

<div class="panel-heading"><!--panel-heading start-->

<div class="row"> <!--panel row starts-->
    
 <div class="col-xs-3"><!--col-xs-3starts-->
  <i class="fa fa-comments fa-5x"></i>   
 </div>   <!--col-xs-3starts-->
   
<div class="col-xs-9 text-right"> <!--col-xs-9 text-right starts-->

<div class="huge">
<?php echo $count_customers ;?>     
</div>
<div>Clientes</div>   
    
</div> <!--col-xs-9 text-right starts-->
    
</div><!--panel row starts-->
        
    
</div>   <!--panel-heading start--> 

<a href="index.php?view_customers">

<div class="panel-footer"><!--panel-footer starts-->

<span class="pull-left">Ver mais..</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix">
    
</div>
                
</div>  <!--panel-footer starts-->      
    
</a>    
    
</div><!--panel-panel-green start-->
   
</div><!--col-lg-3 col-md-6start-->
   
   
   
<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6start-->
    
<div class="panel panel-yellow"><!--panel-panel-yellow start-->

<div class="panel-heading"><!--panel-heading start-->

<div class="row"> <!--panel row starts-->
    
 <div class="col-xs-3"><!--col-xs-3starts-->
  <i class="fa fa-shopping-cart fa-5x"></i>   
 </div>   <!--col-xs-3starts-->
   
<div class="col-xs-9 text-right"> <!--col-xs-9 text-right starts-->

<div class="huge">
<?php echo $count_p_categories  ;?>     
</div>
<div>Categorias de produtos</div>   
    
</div> <!--col-xs-9 text-right starts-->
    
</div><!--panel row starts-->
        
    
</div>   <!--panel-heading start--> 

<a href="index.php?view_p_cats">

<div class="panel-footer"><!--panel-footer starts-->

<span class="pull-left">Ver mais..</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix">
    
</div>
                
</div>  <!--panel-footer starts-->      
    
</a>    
    
</div><!--panel-panel-yellow start-->
   
</div><!--col-lg-3 col-md-6start-->
   
   
   
<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6start-->
    
<div class="panel panel-red"><!--panel-panel-red start-->

<div class="panel-heading"><!--panel-heading start-->

<div class="row"> <!--panel row starts-->
    
 <div class="col-xs-3"><!--col-xs-3starts-->
  <i class="fa fa-support fa-5x"></i>   
 </div>   <!--col-xs-3starts-->
   
<div class="col-xs-9 text-right"> <!--col-xs-9 text-right starts-->

<div class="huge">
<?php echo $count_pending_orders ;?>     
</div>
<div>Pedidos</div>   
    
</div> <!--col-xs-9 text-right starts-->
    
</div><!--panel row starts-->
        
    
</div>   <!--panel-heading start--> 

<a href="index.php?view_orders">

<div class="panel-footer"><!--panel-footer starts-->

<span class="pull-left">Ver mais..</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix">
    
</div>
                
</div>  <!--panel-footer starts-->      
    
</a>    
    
</div><!--panel-panel-red start-->
   
</div><!--col-lg-3 col-md-6start-->
    
</div><!--2nd row start-->










<div class="row"><!--3rd row starts-->

<div class="col-lg-8"><!--col-lg-8 starts-->
 
<div class="panel panel-primary"> <!--panel-panel-primary starts-->

<div class="panel-heading"><!--panel-heading starts-->
 <h3 class="panel-title"><!--panel-title starts-->
  <i class="fa fa-money fa-fw"></i>Novos Pedidos  
 </h3>  <!--panel-title starts--> 
    
</div>        <!--panel-heading starts-->
   
<div class="panel-body"> <!--panel-body starts-->

<div class="table-responsive"><!--table-responsive starts-->
   
<table class="table table-bordered table-hover table-stripped"><!--table table-bordered table-hover table-stripped starts-->

<thead>
 
<tr>

<th>Nº do Pedido</th>   
<th>Email do Cliente</th>  
<th>Nº da Fatura</th> 
<th>Id do Produto</th>  
<th>Quantidade </th> 
<th>Tamanho</th> 
<th>Estado</th> 
   
 
    
</tr>   
    
</thead>  
           
<tbody><!--tbody starts-->

<?php 
 
 $i=0;
     
 $get_oder="select * from pending_orders order by 1 Desc Limit 0,5";
 $run_get_order= mysqli_query($con,$get_oder);
 while($row_order=mysqli_fetch_array($run_get_order)){
     
     $order_id=$row_order['order_id'];
     
     $c_id=$row_order['customer_id'];
     
     $invoice_no=$row_order['invoice_no'];
     
     $product_id=$row_order['product_id'];
     
     $qty=$row_order['qty'];
     
     $size=$row_order['size'];
     
     $order_status=$row_order['order_status'];
     
     $i++;
     
 
 
 
 ?>
 
<tr>
<td><?php echo $order_id; ?></td>  
<td><?php
     
     $get_customer = "select * from customers where customer_id='$c_id'";
     
     $run_customer= mysqli_query($con,$get_customer);
     
     $row_customer = mysqli_fetch_array($run_customer);
     
     $customer_email =$row_customer['customer_email'];
     
     echo $customer_email ;
    
    
    
    ?>


</td>   
<td><?php echo $invoice_no ;?></td> 
<td><?php echo $product_id ;?></td> 
<td><?php echo $qty ;?></td> 
<td><?php echo $size ;?></td> 
<td><?php 
    if($order_status=='pending'){
        echo $order_status='pending';
    }
     else{
         echo $order_status='complete';
     }
    
    
    ?></td> 
    
</tr>   
 <?php  } ?>   
</tbody>  <!--tbody starts-->
            
</table>    <!--table table-bordered table-hover table-stripped starts-->
      
</div>    <!--table-responsive starts-->
   
<div class="text-right"><!--text-right starts-->

<a href="index.php?view_orders">Ver todos os Pedidos <i class="fa fa-arrow-circle-right"></i></a>    
    
</div><!--text-right starts-->
    

 
    
</div> <!--mb-md starts--> 
         
</div>  <!--panel-body starts-->
    
</div>  <!--panel starts-->
  
</div><!--col-md-4 starts-->
    
</div><!--3rd row starts-->





<?php } ?>