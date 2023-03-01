
<center><!-- center Starts -->

<h1>Meus Pedidos</h1>

<p class="lead"> Seus pedidos em um só lugar.</p>

<p class="text-muted" >

Se você tiver alguma dúvida, sinta-se à vontade para entrar em  <a href="../contact.php" > contato conosco,</a> nosso centro de atendimento ao cliente está trabalhando para você 24 horas por dia, 7 dias por semana.


</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Nº</th>
<th>Valor</th>
<th>Fatura Nº</th>
<th>Quantidade</th>
<th>Tamanho</th>
<th>Data do pedido</th>
<th>Pago/não pago</th>
<th>Estado</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_date = substr($row_orders['order_date'],0,11);

$order_status = $row_orders['order_status'];

$i++;

if($order_status=='pending'){

$order_status = "Não Pago";

}
else{

$order_status = "Pago";

}

?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td>BDT <?php echo $due_amount; ?></td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $order_status; ?></td>

<td>
<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-primary btn-sm" > Confirme se não foi pago </a>
</td>


</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



