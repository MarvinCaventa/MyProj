<?php
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

    // Check if username already exists
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      $error = "Username already exists. Please choose a different username.";
    } else {
     // Insert new user into database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
  // Redirect to login page
  header("Location: login.php");
  exit;
} else {
  $error = "Error: " . mysqli_error($conn);
}

    }

    mysqli_close($conn);
  }
} else {
  header("Location: signup.php");
}
?>
