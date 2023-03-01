<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Painel / Inserir Banner

</li>

</ol><!-- breadcrumb Ends -->



</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw"></i> Inserir Banner

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label">Nome do Banner</label>

<div class="col-md-6">

<input type="text" name="slide_name" class="form-control" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label">Link do Banner</label>

<div class="col-md-6">

<input type="text" name="link" class="form-control" >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label">Imagem do Banner:</label>

<div class="col-md-6">

<input type="file" name="slide_image" class="form-control" >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="submit" value="Inserir Banner" class=" btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$slide_name = $_POST['slide_name'];

$link = $_POST['link'];

$slide_image = $_FILES['slide_image']['name'];

$temp_name = $_FILES['slide_image']['tmp_name'];

$temp_link = $_FILES['slide_image']['link'];

$view_slides = "select * from slider";

$view_run_slides = mysqli_query($con,$view_slides);

$count = mysqli_num_rows($view_run_slides);

if($count<4){

move_uploaded_file($temp_name,"slides_images/$slide_image");

$insert_slide = "insert into slider (slide_name,slide_image,link) values ('$slide_name','$slide_image', '$link')";

$run_slide = mysqli_query($con,$insert_slide);

echo "<script>alert('Novo Banner foi inserido')</script>";

echo "<script>window.open('index.php?view_slides','_self')</script>";

}
else {

echo "<script>alert('Você já inseriu 4 slides')</script>";

}

}


?>



<?php } ?>