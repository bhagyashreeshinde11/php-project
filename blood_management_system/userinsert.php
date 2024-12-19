<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
if(isset($_POST["btn"]))
{
    $u=$_POST["username"];
    $p=$_POST["password"];
    $s="insert into user(username,password)values('$u','$p')";
  
  
  $f=mysqli_query($c,$s);
  if($f)
  {
    header("location:userlogin.php");
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
<img src="bd3.png" alt="project" width="1400" height="340" class="w-100 ms-4 p-4 mt-4" >

<h1 style="color:red;text-align:center;">Register</h1>

  <form method="post" class="w-50 ms-4 p-4 mt-4" >
        <div class="text-danger mb-4 mt-4">
      <label for="username">Enter Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
    </div>
    <div class="text-danger mb-4 mt-4">
      <label for="password">Enter Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
   
    <button type="submit" name="btn" class="btn btn-outline-danger btn-lg">Submit</button>
  </form>
</div>
  
  
</body>
</html>