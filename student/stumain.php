<?php 
include 'connect.php';

$id=$_SESSION['usn'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
<div class="sidenav">
<div class="profile">
                <img src="../css/user.png">
                <h3><?php echo $id; ?></h3>
                <p>Logged in</p>
</div>
  <a class="nav-link" href="stumain.php" align="center">Dashboard</a>
  <a class="nav-link" href="stumarks.php"align="center">My Marks</a>
  
  <a class="nav-link" href="attendence.php"align="center">My Attendence</a>
  <a class="nav-link" href="student.php"align="center">Log Out</a>
  
</div>
<div class="container two">
<nav class="navbar navbar-light " style="background:rgb(243,234,243);">
  <span class="navbar-brand mb-2 h1">Welcome <?php echo $id;  ?></span>
</nav>
  <div class="container py-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem;background:#887A92;">
          <div class="card-body">
            <h5 class="card-title"><a class="nav-link" style="color:white;" href="stumarks.php?id=".$id.>My marks</a></h5>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4 shadow-sm" style="width: 18rem; height:14rem; background:#887A92;">
          <div class="card-body">
            <h5 class="card-title"><a class="nav-link" style="color:white;" href="attendence.php">My attendence</a></h5>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<style>
  .two{
      position: absolute;
      top:5%;
      margin-left: 15%; 
      padding: 0px 10px;
    }
    
    .sidenav {
  height: 100%; 
  width: 240px; 
  position: fixed; 
  z-index: 1; 
  top: 0; 
  left: 0;
  background-color: #887a92; 
  overflow-x: hidden; 
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
}


.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav  .profile{
    margin-bottom: 30px;
    text-align: center;
}

.sidenav  .profile img{
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
}
.sidenav  .profile h3{
    color: #ffffff;
    margin: 10px 0 5px;
}

.sidenav  .profile p{
    color: rgb(206, 240, 253);
    font-size: 14px;
    
}

</style>
</body>

</html>