<?php session_start();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>session</title>
</head>
</html>
<?php
if (isset($_POST{"submit"})){
    $name=$_POST['name'];
    $last_name=$_POST['last name'];
    $_SESSION['name']=$name;
    $_SESSION['last name']=$last_name;
}
