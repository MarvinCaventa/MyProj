<?php

function indentText($text, $indentationChar = "\t") {
    // split the text into lines
    $lines = explode("\n", $text);

    // add the indentation character to the beginning of each line
    foreach ($lines as &$line) {
        $line = $indentationChar . $line;
    }

    // join the lines back into a single string
    $indentedText = implode("\n", $lines);

    return $indentedText;
}


$conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
$msg = "";

$sql = "SELECT * FROM diaries;";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>View Diary</title>
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
            <?php foreach ($data as $topic) : ?>
                <div style="width: 900px; background-color: white; padding: 50px; border-radius: 10px; margin: 50x;">
                    <h1><?php echo $topic['TOPIC'] ?></h1>
                    <p><?php echo $topic['CATEGORY'] ?></p>
                    <p><?php echo indentText($topic['CONTENT'], "  ") ?></p>
                    <p><?php echo $topic['DATE'] ?></p>
                </div>
            <?php endforeach ?>

        </center>
    </div>
</body>
</html>
