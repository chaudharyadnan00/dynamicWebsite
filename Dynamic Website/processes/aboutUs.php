<?php
include "../connection/conn.php";
$images = array();
$names = array();
$about = array();
$id = array();

$sql = "SELECT * FROM member";
$result = mysqli_query($con, $sql);
while ($pass = mysqli_fetch_assoc($result)) {
    array_push($images, $pass['image']);
    array_push($names, $pass['name']);
    array_push($about, $pass['about']);
    array_push($id, $pass['id']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="../styles/slideshow.css">
    <script src="../connection/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php for ($i = 0; $i < count($images); $i++) { ?>
        <div class="main" style="width:400px;">
            <div class="image" style="height:250px;background:blue;overflow:hidden;">
                <img src=" ../images/memberImage/<?php echo $images[$i]; ?>" width="400px">
            </div>
            <div class="name">
                <h3><?php echo $names[$i]; ?></h3>
            </div>
            <div class="about">
                <p><?php echo $about[$i]; ?></p>
            </div>
        </div>
    <?php } ?>
</body>

</html>