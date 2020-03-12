<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

if(empty($username) or empty($password)) {
    header('location: ' . 'index.php');
}
  
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE user_name = '$username' and user_password = '$password'")
      or die("Failed to query database ");

    $row=mysqli_fetch_assoc($result);
  
    if (mysqli_num_rows($result) == 1) {
        session_start();

        $_SESSION['user_name'] = $username;
        $_SESSION['id'] = $row['id'];
    }
  
}

// echo "Prisijungimas yra geras!<br><br>";

?>