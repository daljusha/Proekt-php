<?php
session_start();
    if(isset($_POST["upload"])){ 
        include 'db.inc.php';
        include 'functions.php';
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
        if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
           if (UploadImage($connection,$_SESSION["account_id"],$target_file)){
            header("location: ../profile.php?upload=succes");
           
        }else {
            header("location: ../profile.php?upload=fail");
        }

    }else{
        header("location: ../profile.php?upload=fail");
    } 

} else {
    header("location: ../profile.php");

}
?>