<?php
    $servername='localhost';
    $username='root';
    $password='12345679';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
