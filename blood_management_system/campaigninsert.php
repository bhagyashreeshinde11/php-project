<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
if(isset($_POST["btn"]))
{
    $n=$_POST["name"];
    $o=$_POST["organizer"];
    $d=$_POST["date"];
    $t=$_POST["time"];
    $l=$_POST["locaion"];
    
    $s="insert into campaign(name,organizer,date,time,location)values('$n','$o','$d','$t','$l')";
  
  
  $p=mysqli_query($c,$s);
  if($p)
  {
    header("location:campaignlist.php");
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


<div>
<h1 style="color:red;text-align:center;">Welcome to Blood Donors Management System</h1>
<h2 style="color:red;text-align:center;">Donate blood save lives!</h2>

  <form method="post" class="w-50 ms-4 p-4 mt-4" >
    <div class="text-danger mb-4 mt-4">
      <label for="name">Enter Campaign Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="text-danger mb-4 mt-4">
      <label for="lastname">Enter Organizer Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter organizer" name="organizer">
    </div>
    <div class="text-danger mb-4 mt-4">
      <label for="address">Select Campaign Date:</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="date">
    </div>
    <div class="text-danger  mb-4 mt-4">
    <label for="contact">Select Campaign Time:</label>
      <input type="time" class="form-control" id="pwd" placeholder="Enter time" name="time">
    </div> 
    <div class="text-danger  mb-4 mt-4">
      <label for="gender">Enter Campaign Location:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter location" name="location">
    </div> 
    <button type="submit" name="btn" class="btn btn-outline-danger btn-lg">Create Campaign</button>
  </form>
</div>
  
  
</body>
</html>