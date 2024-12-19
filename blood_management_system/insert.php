<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
if(isset($_POST["btn"]))
{
    $f=$_POST["firstname"];
    $l=$_POST["lastname"];
    $a=$_POST["address"];
    $m=$_POST["contact"];
    $g=$_POST["gender"];
    $b=$_POST["bgr"];
    $s="insert into donor1(firstname,lastname,address,contact,gender,bgr)values('$f','$l','$a','$m','$g','$b')";
  
  
  $p=mysqli_query($c,$s);
  if($p)
  {
    header("location:insert.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger ">
  <div class="container-fluid">
  <a class="navbar-brand" href="about.php">
      <img src="logo.jpg" alt="project" style="width:100px;" class="rounded-pill"> 
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="campaignlist.php">Campaign</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
    </ul>
  </div>
</nav>

<div>
<img src="donor1.png" alt="project" width="1400" height="340" class="w-100 ms-4 p-4 mt-4" >

<h1 style="color:red;text-align:center;">Welcome to Blood Donors Management System</h1>
<h2 style="color:red;text-align:center;">Donate blood save lives!</h2>

  <form method="post" class="w-50 ms-4 p-4 mt-4" >
    <div class="text-danger mb-4 mt-4">
      <label for="firstname">FirstName:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="text-danger mb-4 mt-4">
      <label for="lastname">LastName:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter lastname" name="lastname">
    </div>
    <div class="text-danger mb-4 mt-4">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Address" name="address">
    </div>
    <div class="text-danger  mb-4 mt-4">
    <label for="contact">contact:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter contact" name="contact">
    </div> <div class="text-danger  mb-4 mt-4">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter gender" name="gender">
    </div> <div class="text-danger  mb-4 mt-4">
      <label for="bgr">Blood Gr:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter bloodgroup" name="bgr">
    </div>
    <button type="submit" name="btn" class="btn btn-outline-danger btn-lg">Submit</button>
  </form>
</div>
  
  
</body>
</html>