<?php
echo $_SESSION['name'];
echo $_SESSION['last name'];
echo $_SESSION['id_serial_number'];
echo $_SESSION['subject'];
echo $_SESSION['age'];
$n = $_SESSION['picture'];
echo "<img src='picture/$n'width='200px'height='200px'>";