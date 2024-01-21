<?php
include 'connection/connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="insert into `addemp` (name,email,mobile) values('$name','$email','$mobile')";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:display.php");
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
    <title>ADD EMP</title>

    <link rel="stylesheet" href="css/addemp.css">
    <link rel="stylesheet" href="https://maxdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav>
        <ul>
            <a href="home.php" class="logo"><i class="fa-solid fa-house-laptop"></i><span>Sarabia's</span></a>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="payroll.php">Salary</a></li>
            <li><a href="#">ADD EMP</a></li>
            <a href="logout.php" class="logogo"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
        </ul>
    </nav>


    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter employee's name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter employee's email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter employee's mobile number" name="mobile" autocomplete="off" required>
            </div>
    
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
    </div>
</body>
</html>