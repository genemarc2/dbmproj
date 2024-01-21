<?php
include 'connection/connect.php';?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
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
            <li><a href="addemp.php">ADD EMP</a></li>
            <a href="logout.php" class="logogo"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
        </ul>
    </nav>


    <div class="container">
        <button class="btn btn-primary"><a href="addemp.php" class="text-light">ADD USER</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="Select * from `addemp`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
        </tr>';
    }
  }


  ?>
  


    </div>
</body>
</html>