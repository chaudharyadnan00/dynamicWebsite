<?php
include "../connection/conn.php";
$images = array();
$sql = "SELECT * FROM admin";
$result = mysqli_query($con, $sql);
while ($pass = mysqli_fetch_assoc($result)) {
    array_push($images, $pass['value']);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slideshow</title>
    <link rel="stylesheet" type="text/css" href="../styles/slideshow.css">
    <script src="../../others/files/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="slideshow-container" style="margin-top: 20px;">
        <?php
        for ($i = 0; $i < count($images); $i++) {
        ?>
            <div class="mySlides fade">
                <div class="numbertext"><?php echo $i + 1 / count($images); ?></div>
                <img src="./../images/slideshowImages/<?php echo $images[$i]; ?>" style="width:100%">
                <div class="text">Caption <?php echo $i + 1; ?></div>
            </div>
        <?php } ?>




        <!-- 

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img_nature_wide.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img_snow_wide.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img_mountains_wide.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div> -->
        <!-- <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a> -->
        <!-- <a class="next" onclick="plusSlides(1, 1)">&#10095;</a> -->

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <?php
        for ($i = 0; $i < count($images); $i++) {
        ?>
            <span class="dot" onclick="currentSlide(<?php echo $i + 1; ?>)"></span>
        <?php } ?>

        <!-- <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span> -->
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

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