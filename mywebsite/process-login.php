<?php
// Start session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate form data
  if (empty($username) || empty($password)) {
    $error = "Please fill out all fields.";
  } else {
    // Connect to database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mydatabase";

    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Check if username exists and password is correct
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      // Login successful, store session variable
      $_SESSION["username"] = $username;
      header("Location: home.php");
      exit();
    } else {
      // Login failed
      $error = "Incorrect username or password.";
    }

    mysqli_close($conn);
  }
} else {
  header("Location: login.php");
  exit();
}
?>
