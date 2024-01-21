<?php
include 'connection/connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $salary=$_POST['salary'];
    $worked_hours=$_POST['worked_hours'];
    $holiday_hours=$_POST['holiday_hours'];

    $sql="insert into `employees` (name,salary,worked_hours,holiday_hours) values('$name','$salary','$worked_hours','$holiday_hours')";
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
    <title>PAYROLL</title>

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
            <li><a href="#">Salary</a></li>
            <li><a href="addemp.php">ADD EMP</a></li>
            <a href="logout.php" class="logogo"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
        </ul>
    </nav>


    <div class="container my-5">
        <form method="post">

            <div class="form-group">
                <label>Employee Name</label><br>
                <input type="text" placeholder="Enter employee's name" name="name" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label>Salary</label><br>
                <input type="number" placeholder="how much??" name="salary" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Worked Hours</label><br>
                <input type="number" placeholder="how much??" name="worked_hours" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Holiday Hours</label><br>
                <input type="number" placeholder="how much??" name="holiday_hours" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">name&salary</button>
        </form>
    </div>
</body>
</html>