<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbmproj';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Function to get the list of employees
function getEmployees($conn) {
    $query = "SELECT * FROM employees";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Function to record attendance
function recordAttendance($conn, $employeeId, $status) {
    $date = date("Y-m-d");
    $query = "INSERT INTO attendance (employee_id, attendance_date, status) VALUES ('$employeeId', '$date', '$status')";
    return mysqli_query($conn, $query);
}

// Function to display attendance
function displayAttendance($conn) {
    $query = "SELECT employees.name, attendance.attendance_date, attendance.status
              FROM employees
              LEFT JOIN attendance ON employees.id = attendance.employee_id";
    $result = mysqli_query($conn, $query);

    echo "<table border='1'>
            <tr>
                <th>Employee Name</th>
                <th>Attendance Date</th>
                <th>Status</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['attendance_date']}</td>
                <td>{$row['status']}</td>
            </tr>";
    }

    echo "</table>";
}