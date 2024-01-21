<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="home.php" class="logo"><i class="fa-solid fa-house-laptop"></i><span>Sarabia's</span></a>

        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="attendance.php">Attendance</a></li>
            <li><a href="calc_pay.php">Payroll</a></li>
            <li><a href="payroll.php">Salary</a></li>
            <li><a href="addemp.php">ADD EMP</a></li>
        </ul>
        <a href="logout.php" class="logogo"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
    </header>

     <h2>Hello User, <?php echo $_SESSION['name']; ?> <br>Welcome to Payroll Management System</h2>


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>