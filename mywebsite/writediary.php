<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
$msg = "";

if (isset($_POST['submit'])) {
    $topic = mysqli_real_escape_string($conn, $_POST['topic']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $sql = "INSERT INTO diaries (TOPIC, CATEGORY, CONTENT, DATE) VALUES('$topic', '$category', '$content', '$date')";

    if (mysqli_query($conn, $sql)) {
        header('Location: writediary.php');
    } else {
        $msg = "An error occurred.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Write Diary</title>
    <style>
        .form-box {
            width: 800px;
        }
    </style>
</head>
<body>
    <div class="header" id="navbar">
        <ul class="nav-bar" style="background-color: #ffffff;">
            <li class="nav-content-left nav-content"><a style="font-size: 120%;"><b>Mypage</b></a></li>
            <li class="nav-content-right nav-content"><a href="home.php">Profile</a></li>
            <li class="nav-content-right nav-content"><a href="gallery.php">Gallery</a></li>
            <li class="nav-content-right nav-content"><a href="viewdiary.php">View Diary</a></li>
            <li class="nav-content-right nav-content"><a href="writediary.php">Write Diary</a></li>
        </ul>
    </div>

    <div class="content">
        <center>
            <br><br><br>
            <div class="form-box" style="margin: 2%; font-size: 150%; width: 800px;">
                <form action="writediary.php" method="post">
                    <h3>Diary Entry</h3>
                    <table>
                        <tr>
                            <td>Topic:</td>
                            <td><input type="text" name="topic" required></td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td><input type="text" name="category" required></td>
                        </tr>
                        <tr>
                            <td>Content:</td>
                            <td><textarea name="content" rows="15" cols="50" style="height: 200px; width: 100%;" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td><input type="date" name="date" required></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" name="submit" value="Submit">
                    <br>
                    <span style="color:red;"><?php echo $msg; ?></span>
                </form>
            </div>
        </center>
    </div>
</body>
</html>
