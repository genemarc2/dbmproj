<?php
include 'connection/attendance_database_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ATTENDANCE</title>
	<link rel="stylesheet" type="text/css" href="css/addemp.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    h1 {
        color: #333;
    }

    form {
        margin-bottom: 20px;
    }

    table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

</head>
<body>
    <nav>
        <ul>
            <a href="home.php" class="logo"><i class="fa-solid fa-house-laptop"></i><span>Sarabia's</span></a>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="payroll.php">Salary</a></li>
            <li><a href="addemp.php">ADD EMP</a></li>
            <a href="logout.php" class="logogo"><i class="fa-solid fa-power-off"></i><span>Logout</span></a>
        </ul>
    </nav>

    <h1>Mark Attendance</h1>

    <form action="process_attendance.php" method="post">
        <?php
        $employees = getEmployees($conn);

        while ($row = mysqli_fetch_assoc($employees)) {
            echo "<label>{$row['name']}</label>
                <input type='radio' name='attendance[{$row['id']}]' value='present'> Present
                <input type='radio' name='attendance[{$row['id']}]' value='absent'> Absent
                <br>";
        }
        ?>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>

    <h1>Attendance Records</h1>
    <?php displayAttendance($conn); ?>

</body>
</html>