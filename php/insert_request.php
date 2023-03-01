<?php 
include "../includes/db.php";
include "../functions/functions.php";
//buscar aqui o usuario
$user = 7;
$sql = "SELECT * FROM `cart`";
$query_ver_prod = mysqli_query($db, $sql);
$sql1 = "";
$sql2 = "";
$ids = [];

$dt = ["msg"  => 'erro'];
if ($_POST['action'] == 'aceite') {
    if (mysqli_num_rows($query_ver_prod) >= 1) {
        
        while($d = mysqli_fetch_array($query_ver_prod)){
            $id = $d['p_id'];
            array_push($ids,$id);
            $sql1 .= "DELETE FROM `cart` WHERE `p_id` = '$id'";
        }

        for ($i=0; $i < count($ids); $i++) { 
            $id = $ids[$i];
            $in_voice = uniqid(md5(time()));
            $sql2 .= "INSERT INTO `pending_orders`(`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES (default,'$user','$in_voice','$id','1','0','aceite')";
        }

        $inserir = mysqli_query($db, $sql2);

        if ($inserir) {
            $del = mysqli_query($db,$sql1);
            if ($del) {
                $dt = [
                    "msg"  => 'aceite'
                ];
            }
        }

    }
}else{
    if (mysqli_num_rows($query_ver_prod) >= 1) {
        
        while($d = mysqli_fetch_array($query_ver_prod)){
            $id = $d['p_id'];
            array_push($ids,$id);
            $sql1 .= "DELETE FROM `cart` WHERE `p_id` = '$id'";
        }

        for ($i=0; $i < count($ids); $i++) { 
            $id = $ids[$i];
            $in_voice = uniqid(md5(time()));
            $sql2 .= "INSERT INTO `pending_orders`(`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES (default,'$user','$in_voice','$id','1','0','rejeitado')";
        }

        $inserir = mysqli_query($db, $sql2);

        if ($inserir) {
            $del = mysqli_query($db,$sql1);
            if ($del) {
                $dt = [
                    "msg"  => 'rejeitado'
                ];
            }
        }

    }
}

echo json_encode($dt);

?>