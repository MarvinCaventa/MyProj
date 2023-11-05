<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
$msg = "";

if (isset($_POST['logout'])) {
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Profile</title>

    <style>
        td {
            font-size: 100%;
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


    <div class="content" style="padding-top: 20px;">
        <div class="leftdivprofile" style="    border-radius: 10px;
    float: left;
    width: 35%;
    background-color: white;
    margin:auto;
    min-width: 100px;
    min-height: 600px;
    padding-bottom: 20px;
    padding-top: 20px;">
            <center>
                <img src="salpakmoto.jpg" alt="profile" style="border-radius: 100%;" width="200px">
                <h1>Marvin A. Caventa</h1>
            </center>
            <div style="padding-left: 20px; padding-right: 10px">
                <table>
                    <tr>
                        <td>Address:</td>
                        <td>Caridad, Cabanatuan City, N.E.</td>
                    </tr>
                    <tr>
                        <td>Course:</td>
                        <td>BSIT</td>
                    </tr>
                    <tr>
                        <td>Hobbies:</td>
                        <td>
                            <ul>
                                <li>Watch Anime</li>
                                <li>Read Manga</li>
                                <li>Play Video Games</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <br>
                <p>
    I am a person who loves to travel and go on exciting adventures. Discovering new places, cultures and meeting different people is something that I find very exciting. Apart from that, I am also interested in cars and music. Spending time alone, listening to music and admiring the beauty of cars gives me peace and happiness.
</p>
<p>
    I enjoy exploring different types of music, discovering new artists and attending live concerts to experience the magic of music. My love for cars and music is an integral part of my identity and it brings me great joy and contentment.
</p>
                <br>
                <center>
                    <form method="post"><input type="submit" value="Log-out" name="logout"></form>
                </center>
            </div>
        </div>

        <div style="float: right; width: 64%; min-width: 300px; background-color: white; border-radius: 10px; padding-top: 40px; margin:auto;
    min-height: 600px;
    padding-bottom: 40px;">

            <div style="padding:10px;background:#000;webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;width:720px;margin:0 auto;overflow:hidden;">
                <iframe width="720" height="400" src="https://www.youtube.com/embed/zcruIov45bI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <center>
                <br><br>
                <h2>A video that decribes me.</h2>
            </center>
        </div>
    </div>

</body>

</html>
