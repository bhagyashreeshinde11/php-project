<?php
session_start();
$c=mysqli_connect("localhost","root","","blood_management_system");
if(isset($_POST["btn"]))
{
  $u=$_POST['username'];
  $p=$_POST['password'];
  $s="select * from admin1 where username='$u' and password='$p'";
  $r=mysqli_query($c,$s);
  $q=mysqli_fetch_array($r);
  if($q)
  {
    $_SESSION['t']=$_POST['username'];
    header("Location:list.php");
  }
  else
  {
    echo "wrong password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .border {
    display: inline-block;
    width: 500px;
    height: 600px;
    margin: 6px;
  }
  </style>

    
</head>
<body>
 <div class="mx-auto" style="width:500px">
<span class="border border-primary mb-3 mt-3 p-4" style="width:500px;">
<h2 style="text-align:center ;">Admin</h2>
<img src="admin.png" alt="project" class="mx-auto d-block" style="width:50%" width="250" height="250">
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="username">Enter Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3 mt-3">
      <label for="password">Enter Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    
    <div class="d-grid">
    <button name="btn" type="submit" class="btn btn-primary btn block">Login</button>
    
  </div>
  </span>
</div>
   
  </form>



</body>
</html>