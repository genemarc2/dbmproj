<?php
include 'connection/attendance_database_connection.php'; // Include the file with database connection and functions

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['attendance'] as $employeeId => $status) {
        recordAttendance($conn, $employeeId, $status);
    }
}

header("Location: attendance.php");