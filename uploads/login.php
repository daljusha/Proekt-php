<!DOCTYPE HTML>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <title>Registration</title>
 </head>
 <body>
 <?php
        include 'includes/header.inc.php';
  ?>
  <div class="login">
    
           
    <h1>login</h1>
    <?php
       if (isset($_GET["error"])){
       if  ($_GET["error"] == "incorrect"){
        echo "<font color=red><b>Login or password is incorrect!</b></font>";
       }
    }
    ?> 
    <form method="POST" action="includes/login.inc.php">
    <input name="username" placeholder="Enter username"><br><br>
    <input name="password" placeholder="Enter password" type="password"><br><br>
    <button name="submit">login</button>
    </form>
    <div id="registerlink">
    <a id="registerlink" href="register.php">Registration is here!<a>
    </div>    

 <body>
</html>
