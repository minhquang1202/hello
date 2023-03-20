<?php
    include 'conn.php';
    ?>

<?php
            $username = $_POST['username'];
            $role = $_POST['role'];
            $password = $_POST['password'];
            




            $submit = $_POST["submit"];
            


$sql = "INSERT INTO user (username, password, role) 
        VALUES ('$username', '$password', '$role')";



if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Them nhan vien thanh cong")</script>';
  require_once 'themnhanvien.html';
} else {
  echo '<script>alert("Nhap thieu thong tin")</script>' . $sql . "<br>" . $conn->error;
  require_once 'themnhanvien.html';
}

?>
