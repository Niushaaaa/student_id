<?php session_start(); ?>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>session</title>
    </head>
    </html>
<?php
if (isset($_POST{"submit"})) {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $last_name = $_POST['last name'];
    $_SESSION['last name'] = $last_name;
    $id_serial_number = $_POST['id_serial_number'];
    $_SESSION['id_serial_number'] = $id_serial_number;
    $subject = $_POST['subject '];
    $_SESSION['subject'] = $subject;
    $age = $_POST['age'];
    $_SESSION['age'] = $age;


    if (isset($_FILES["file"])){
        $nn=$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        if (move_uploaded_file($tmp,"picture/$nn")){
            $_SESSION['picture']=$nn;
        }
        header("location/profile.php");

    }
}
?>
<form method="post" enctype="multipart/form-data">
    <label>name:</label><br/>
    <input type="text" name="name"><br/>
    <label>last name:</label><br/>
    <input type="text" name="last name"><br/>
    <label>id serial number:</label><br/>
    <input type="number" name="id_serial_number"><br/>
    <label>subject:</label><br/>
    <input type="text" name="subject"><br/>
    <label>age:</label><br/>
    <input type="number" name="age"><br/>
    <input type="file" name="file">
    <input type="submit" name="submit" value="run">
</form>
