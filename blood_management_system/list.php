<?php
session_start();
$c=mysqli_connect("localhost","root","","blood_management_system");
$s="select * from donor1";
$r=mysqli_query($c,$s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
    <title>Donor list</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-danger ">
  <div class="container-fluid">
  <a class="navbar-brand" href="about.php">
      <img src="logo.jpg" alt="project" style="width:100px;" class="rounded-pill"> 
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="campaigninsert.php">Create Campaign</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
    </ul>
  </div>
</nav>

<div>
<img src="donor1.png" alt="project" width="1500" height="400"  >

  <?php //<h1 style="color:red;text-align:center;"> welcome <?php echo $_SESSION['t'];?> </h1> ?>
  <h1 style="color:red;text-align:center;"> Welcome</h1>
  <h2 style="color:red;text-align:center;">below are the list of the people who are registered as donors</h2>
<table class="table w-75 table ms-4 mt-4 p-4 ">
<thead class="table-danger">
      <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
        <?php
    while ($y = mysqli_fetch_array($r)) 
    {
        $f=$y["firstname"];
        $l=$y["lastname"];
        $a=$y["address"];
        $m=$y["contact"];
        $g=$y["gender"];
        $b=$y["bgr"];
        $id=$y["id"];
        

        ?>
      <tr>
        <td><?php echo $f;?></td>
        <td><?php echo $l;?></td>
        <td><?php echo $a;?></td>
        <td><?php echo $m;?></td>
        <td><?php echo $g;?></td>
        <td><?php echo $b;?></td>
        <td><a href ="edit.php?y=<?php echo $id;?>"  class="btn btn-link">Edit</a>&nbsp&nbsp;<a href="delete.php?y=<?php echo $id;?>"class="btn btn-link">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="logout.php" class="btn btn-danger" style="margin-left:700px">Logout</a>
</div>
</body>
</html>