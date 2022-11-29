<?php 
session_start();
if(!isset($_SESSION['username'])) {
    $_SESSION['username'] = "admin";
    $_SESSION['age'] = 18;
}

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Session</title>
</head>

<body>
    <?php
    echo "Your username: ". $_SESSION['username'] ."</br>";
    echo "Your age: ". $_SESSION['age'] ."</br>";
?>
    <a href="test_session.php">Click here!</a>
</body>

</html>