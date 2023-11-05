<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gallery</title>

    <style>
        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */

        .prev {
            left: 0;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* =============================================================================================================== */
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
        <center>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 10</div>
                    <img src="pic1.jpg" style="width:100%">
                    <!-- <div class="text">Bliss from windows xp - reminds me of my child hood.</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 10</div>
                    <img src="pic2.jpg" style="width:100%">
                    <!-- <div class="text">Caption Two</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 10</div>
                    <img src="pic3.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 10</div>
                    <img src="pic4.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 10</div>
                    <img src="pic5.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 10</div>
                    <img src="pic6.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">7 / 10</div>
                    <img src="pic7.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">8 / 10</div>
                    <img src="pic8.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">9 / 10</div>
                    <img src="pic9.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">10 / 10</div>
                    <img src="pic10.jpg" style="width:100%">
                    <!-- <div class="text">Caption Three</div> -->
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(10)"></span>
            </div>
            <h2>"Images that I use as wallpaper",  "the fruit that I love.", "Out of town picture".</h2>
        </center>
        <!-- -------------------------------------playlist======================== -->
        <center>
            <div class="music-player" style="background-color: white; width: 30%; padding: 10px; border-radius:10px;">
               
                <h6 style="font-size: 105%;">I listen to these music when I'm studying or coding. It helps me focus on what I'm doing.</h6>
                <audio controls id="audioS" style="width: 100%; border-radius: 10px;">
                    <source type="audio/mpeg" id="now-playing" src="music.mp3">
                </audio>
                 <h3 id="mustit">
                    Derm kala by - khruangbin
                </h3>
                 
               <audio controls id="audioS" style="width: 100%; border-radius: 10px;">
                    <source type="audio/mpeg" id="now-playing" src="music2.mp3">
                </audio>
                <h3 id="mustit">
                    Himala by - Rivermaya
                </h3>
               <audio controls id="audioS" style="width: 100%; border-radius: 10px;">
                    <source type="audio/mpeg" id="now-playing" src="music3.mp3">
                </audio>
               <h3 id="mustit">
                    Kung ayaw mo, Huwag mo by - Rivermaya
                </h3>
               <audio controls id="audioS" style="width: 100%; border-radius: 10px;">
                    <source type="audio/mpeg" id="now-playing" src="music4.mp3">
                </audio>
               <h3 id="mustit">
                    Elise by - Rivermaya
                </h3>
                <script src="js/playlist.js"></script>
            </div>
        </center>

    </div>


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>
