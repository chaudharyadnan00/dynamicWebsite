<?php
include "../connection/conn.php";
$images = array();
$imageId = array();
$sql = "SELECT * FROM admin";
$result = mysqli_query($con, $sql);
while ($pass = mysqli_fetch_assoc($result)) {
    array_push($images, $pass['value']);
    array_push($imageId, $pass['id']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../styles/admin.css">
    <script src="../connection/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <h3 id="heading3">Manage slideshow content</h3>

    <div id="formType">
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <span>Select new image to upload:</span>
            <br>
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload" >
            <br><br>
            <input type="submit" value="Upload Image" name="submit" class="fileInput">

        </form>
    </div>
    <br>
    <!-- <hr> -->
    <!-- <div class="table-wrapper"> -->
        <table>
            <!-- <thead> -->
                <tr>
                    <th>S.No.</th>

                    <th>Image</th>
                    <th>Image name</th>
                    <th>Delete</th>
                </tr>
            <!-- </thead> -->
            <?php
            for ($i = 0; $i < count($images); $i++) {
            ?>
                <!-- <tbody> -->
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td>
                            <!-- <div id="fontSize"> -->
                            <img src="./../images/slideshowImages/<?php echo $images[$i]; ?>" height="150px">
                            <!-- <img src="./../images/memberImage/<?php echo $images[$i]; ?>" height="150px"> -->
                            <span style="display:none"><?php echo $images[$i]; ?></span>
                            <!-- </div> -->

                        </td>
                        <td><?php echo $images[$i]; ?></td>
                        <td><span id="error" style="display:none;"></span><br><button class="custom-btn btn-3" id="<?php echo $imageId[$i]; ?>" onclick="deleteImage(this)">Delete</button></td>
                    </tr>
                <!-- </tbody> -->
            <?php } ?>
        </table>
    </div>
    <!-- <hr> -->
    <script>
        function deleteImage(e) {
            const id = e.id;
            const img = e.parentElement.parentElement.children[1].children[1].innerHTML;
            const err = document.getElementById('error');
            $.ajax({
                url: "./deleteImage.php",
                method: "post",
                data: {
                    id: id,
                    img: img
                },
                success: function getdata(result) {
                    if (result != "right") {
                        $("#" + id).siblings().text("Error : Try again");
                        $("#" + id).siblings().css({
                            "display": "inline-block"
                        });
                    } else {
                        $("#" + id).siblings().text("This image has been already removed.");
                        $("#" + id).siblings().css({
                            "display": "inline-block"
                        });
                        document.getElementById(id).style.display = "none";
                    }
                }
            });
        }
    </script>
</body>

</html>