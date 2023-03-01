
<h1 align="center">Mudar a Senha </h1>

<form action="" method="post"><!-- form Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Digite sua senha atual</label>

<input type="password"  name="old_pass" class="form-control" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Digite sua nova senha</label>

<input type="password" name="new_pass" class="form-control" required>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>Digite sua nova senha novamente</label>

<input type="password" name="new_pass_again" class="form-control" required>

</div><!-- form-group Ends -->

<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="submit" class="btn btn-primary">

<i class="fa fa-user-md"> </i> Mudar a Senha

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->
<?php

if(isset($_POST['submit'])){

$c_email = $_SESSION['customer_email'];

$old_pass = $_POST['old_pass'];

$new_pass = $_POST['new_pass'];

$new_pass_again = $_POST['new_pass_again'];
    
$new_hash_password = password_hash ($new_pass_again, PASSWORD_DEFAULT);

$sel_old_pass = "select * from customers where customer_email='$c_email'";

$run_old_pass = mysqli_query($con,$sel_old_pass);

$row_old_pass = mysqli_fetch_array ($run_old_pass);
    
$hash_password = $row_old_pass['customer_pass'];
    
$check_old_pass = password_verify($old_pass,$hash_password);

if($check_old_pass==0){

echo "<script>alert('Sua senha atual não é válida tente novamente')</script>";

exit();

}

if($new_pass!=$new_pass_again){

echo "<script>alert('Sua nova senha não corresponde')</script>";

exit();

}

$update_pass = "update customers set customer_pass='$new_hash_password' where customer_email='$c_email'";

$run_pass = mysqli_query($con,$update_pass);

if($run_pass){

echo "<script>alert('Sua senha foi alterada com sucesso')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";


}




}



?>







