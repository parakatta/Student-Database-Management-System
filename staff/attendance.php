<?php
include 'connect.php';
$subcode=$_SESSION['sub'];
/*if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

}*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
<section>
  
<div class="sidenav">
<div class="profile">
                <img src="../css/user.png">
                <h3>STAFF</h3>
                <p>Logged in</p>
</div>
<a class="nav-link" href="dashboard.php" align="center">Dashboard</a>
  <a class="nav-link" href="page.php"align="center">Marks</a>
  <a class="nav-link" href="average.php" align="center">Average</a>
  <a class="nav-link" href="attendance.php" align="center">Attendence</a>
  <a class="nav-link" href="view.php" align="center">View All</a>
  <a class="nav-link" href="staff.php"align="center">Log Out</a>
</div>
  <div class="container">
  <nav class="navbar navbar-light my-5" style="margin-left:10px;background:rgb(243,234,243);">
  <span class="navbar-brand mb-2 h1"style="margin-left:10px;">Attendance</span>
</nav>
    
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">USN</th>
          <th scope="col">NAME</th>
          <th scope="col"><?php echo $subcode;?></th>
          <!-- <th scope="col">18CS52</th>
          <th scope="col">18CS53</th>
          <th scope="col">18CS54</th>
          <th scope="col">18CS55</th>
          <th scope="col">18CS56</th> -->
          <th scope="col">EDIT</th>
        </tr>
      </thead>
      <tbody>
        <!--php script-->
        <?php
        $sql = "select * from `attendence`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $usn = $row['USN'];
            $name = $row['stud_name'];
            $sub1 = $row['CS51'];
            $sub2 = $row['CS52'];
            $sub3 = $row['CS53'];
            $sub4 = $row['CS54'];
            $sub5 = $row['CS55'];
            $sub6 = $row['CS56'];

            echo '
            <tr>
        <th scope="row">' . $usn . '</th>
        <td>' . $name . '</td>';
        if($subcode=='18CS51'){
          echo '<td>' . $sub1 . '</td>';
        }
        else if($subcode=='18CS52'){
          echo '<td>' . $sub2 . '</td>';
        }
        else if($subcode=='18CS53'){
          echo '<td>' . $sub3 . '</td>';
        }
        else if($subcode=='18CS54'){
          echo '<td>' . $sub4 . '</td>';
        }
        else if($subcode=='18CS55'){
          echo '<td>' . $sub5 . '</td>';
        }
        else if($subcode=='18CS56'){
          echo '<td>' . $sub6 . '</td>';
        }
            

      echo '<td>
     <button class="btn btn-primary"><a href="updateAtt.php?updateid=' . $usn . '" class="text-light">Update</a></button>
     

 </td>
    </tr>';
          }
        }



        ?>
      </tbody>
    </table>
  </div>
  <style type="text/css">
    .container{
      position: absolute;
      margin-left:15%;
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
    .stu{
      float:right;
      margin-right: 5px;
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
  </section>

</body>

</html>