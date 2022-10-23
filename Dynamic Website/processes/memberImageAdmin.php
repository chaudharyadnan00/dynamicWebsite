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
    <title>Members Admin</title>
    <link rel="stylesheet" type="text/css" href="../styles/memberImageAdmin.css">
    <script src="../connection/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="about">
        <h3 id="heading3">Manage about us page</h3>
        <div id="formType">
            <h4>Add new member</h4>
            <form method="post" action="insertAboutUs.php" enctype="multipart/form-data">
                <label>Name : </label>
                <input type="text" name="name" placeholder="Enter member name"><br><br>
                <label>About : </label>
                <input type="text" name="about" placeholder="Enter something about member" id="about"><br><br>
                <label>Upload member image:</label><br><br>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br><br>
                <input type="submit" value="Upload Image" name="submit" class="fileInput">
            </form>
        </div>
        <br>
        <!-- <hr> -->
        <div>
            <!-- <div class="table-wrapper"> -->
                <table>
                    <!-- <thead> -->
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>Member name</th>
                            <th>About</th>
                            <th>Remove Member</th>
                        </tr>
                    <!-- </thead> -->
                    <?php
                    for ($i = 0; $i < count($images); $i++) {
                    ?>
                        <!-- <tbody> -->
                            <tr>
                                <td><?php echo $i + 1; ?></td>
                                <td>
                                    <img src="./../images/memberImage/<?php echo $images[$i]; ?>" height="150px">
                                    <span style="display:none"><?php echo $images[$i]; ?></span>
                                </td>
                                <td style="font-size: 18px;"><?php echo $names[$i]; ?></td>
                                <td style="font-size: 18px;"><?php echo $about[$i]; ?></td>
                                <td><span id="error" style="display:none;"></span><br><button class="custom-btn btn-3" id="<?php echo $id[$i]; ?>" onclick="deleteImage(this)">Remove Member</button></td>
                            </tr>
                        <!-- </tbody> -->
                    <?php } ?>
                </table>
            <!-- </div> -->
            <!-- <hr> -->

            <script>
                function deleteImage(e) {
                    const id = e.id;
                    const img = e.parentElement.parentElement.children[1].children[1].innerHTML;
                    console.log(img);
                    const err = document.getElementById('error');
                    $.ajax({
                        url: "./deleteMember.php",
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