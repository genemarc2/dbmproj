<?php
include 'connection/connect.php';
$id=$_GET['updateid'];
$sql="Select * from `employees` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$salary=$row['salary'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $salary=$_POST['salary'];


    $sql="update `employees` set id='$id',name='$name',salary='$salary' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:pay_disp.php");
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>

    <link rel="stylesheet" href="https://maxdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
            <form method="post">

                <div class="form-group">
                    <label>Employee Name</label><br>
                    <input type="text" placeholder="Enter employee name" name="name" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <label>Salary</label><br>
                    <input type="number" placeholder="How much??" name="salary" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </form>
    </div>
</body>
</html>