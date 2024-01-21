<?php
include 'connection/connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `employees` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:pay_disp.php');
    }else{
        die(mysqli_error($con));
    }
}

?>