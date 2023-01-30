<?php
    if (isset($_POST["submit"])){
        include 'functions.php';
        include 'db.inc.php';
        $username=$_POST["username"];
        $password=$_POST["password"];
        $firstname=$_POST["firstname"];
        $firstname=$_POST["lastname"];
        SetPersonalData($connection,$firstname,$lastname,$_SESSION["account_id"]);
        header("Location: ../profile.php");
    }else{
        header("location: ../profile.php");
            
    }
    ?>