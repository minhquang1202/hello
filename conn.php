<?php
$conn = mysqli_connect('localhost', 'lam', 'nguyenlam2001N', 'bclthdt');
if ($conn->connect_error) {
die("Ket noi that bai" . $conn->connect_error);
     }
?>