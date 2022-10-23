<?php
include "../connection/conn.php";
$id=$_POST['id'];
$img=$_POST['img'];
$sql = "DELETE FROM admin WHERE id='$id'";
$result = mysqli_query($con, $sql);
if($result){
    $file_pointer = "../images/slideshowImages/".$img;

    // Use unlink() function to delete a file
    if (!unlink($file_pointer)) {
        echo ("$file_pointer cannot be deleted due to an error");
    } else {
        echo ("right");
    }
}
else{
    echo "Error";
}
?>