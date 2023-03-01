<?php 
include "includes/db.php";
include "functions/functions.php";
//buscar aqui o usuario
$user = 7;

$tp = $_POST['tp'];//somente para verificações
$prod = $_POST['prod_id'];
$sql = "SELECT * FROM `fav_products` WHERE `id_product` = '$prod' AND user = '$user'";
$data = [];
$query = mysqli_query($db,$sql);
if (mysqli_num_rows($query) >= 1) {
    $data = [
        "icon" => ""
    ];
    echo json_encode($data);
}else{
    $sql = "INSERT INTO `fav_products`(`id_fav`, `id_product`, `user`) VALUES (default,'$prod','$user')";
    $query = mysqli_query($db, $sql);
    
    
    if ($query) {
        $data = [
            "icon" => 'fa fa-star'
        ];
    
        echo json_encode($data);
    }else{
        $data = [
            "icon" =>'fa fa-star-o'
        ];
        echo json_encode($data);
    }
}


?>