<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
$id=$_GET['y'];
$s="select * from donor1 WHERE id = $id";
$r=mysqli_query($c,$s);

while ($y = mysqli_fetch_array($r)) 
{
    $f=$y["firstname"];
    $l=$y["lastname"];
    $a=$y["address"];
    $m=$y["contact"];
    $g=$y["gender"];
    $b=$y["bgr"];
    $id=$y["id"];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
<form method="post" action="update.php?y=<?php echo $id;?>" class="w-50 ms-4 bg-success p-4 mt-4">
    <div class="mb-3 mt-3">
      <label for="firstname">FirstName:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" value="<?php echo $f;?>">
    </div>
    <div class="mb-3">
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter lastname" name="lastname"value="<?php echo $l;?>">
    </div>
    <div class="mb-3">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address"value="<?php echo $a;?>">
    </div>
    <div class="mb-3">
      <label for="contact">Contact:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter contact" name="contact"value="<?php echo $m;?>">
    </div>
    <div class="mb-3">
      <label for="gender">Gender:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter gender" name="gender"value="<?php echo $g;?>">
    </div>
    <div class="mb-3">
      <label for="bgr">Blood Gr:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter bloodgroup" name="bgr"value="<?php echo $b;?>">
    </div>

    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
  </form>
    
</body>
</html>