<?php


include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username) || empty($password)) {
       header("location:staff.php?Empty= Please Fill in the Blanks");
} else {
       $s = "SELECT * FROM `staff_reg` WHERE username='$username'&& password='$password'";
       $result = mysqli_query($con, $s);
       $num = mysqli_num_rows($result);
       if ($num == 1) {
              //  $_SESSION['username']=$username;
              header('location:staff.php?Invalid= Wrong username or password');
       } else {
              $_SESSION['username'] = $username;
        $id = $_SESSION['username'];
              header('location:page.php');
       }
}
