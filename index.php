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
    $_SESSION['subject '] = $subject;
    $age = $_POST['age'];
    if
}
