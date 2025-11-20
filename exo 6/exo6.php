<?php
session_start();
 
 
if (isset($_POST['username'])) {
   
    $_SESSION['username'] = $_POST['username'];
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
</head>
<body>
 
<h1>Login</h1>
 
<?php
 
if(!isset($_SESSION['username'])) {
 
    ?>
   
    <form method="post">
        <label>Username :</label>
        <input type="text" name="username">
        <input type="submit" value="Valider">
    </form>
 
    <?php
} else {
   
    echo "Bonjour " . $_SESSION['username'];
}
?>
 
</body>
</html>
 