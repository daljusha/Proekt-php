<?php
session_start();
if (isset($_SESSION["is_admin"])){
    if ($_SESSION["is_admin"] ==1){

    


    if(isset($_POST["submitBook"])){ 
        include 'db.inc.php';
        include 'functions.php';
        $target_dir = "../books/";
        $target_file = $target_dir . basename($_FILES["bookToUpload"]["name"]);
        if (move_uploaded_file($_FILES["bookToUpload"]["tmp_name"], $target_file)) {
           if (UploadBook($connection,$_POST["Author"],$_POST["Title"],$_POST["Publisher"],$target_file) == true){
            header("location: ../admin.php?upload=succes");
           
        }else {
            header("location: ../admin.php?upload=fail");
        }

    }else{
        header("location: ../admin.php?upload=fail");
    } 

} else {
    header("location: ../admin.php");

}
    }
}
?>