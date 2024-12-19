<?php
session_start();
$c=mysqli_connect("localhost","root","","blood_management_system");
$s="select * from campaign";
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
    


<div>
  <?php //<h1 style="color:red;text-align:center;"> welcome <?php echo $_SESSION['t'];?> </h1> ?>
  <h1 style="color:red;text-align:center;"> Campaign </h1>
 
<table class="table w-75 table ms-4 mt-4 p-4 ">
<thead class="table-danger">
      <tr>
        <th>Name</th>
        <th>Organizer</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
    </tr>
    </thead>
    <tbody>
        <?php
    while ($y = mysqli_fetch_array($r)) 
    {
        $n=$y["name"];
        $o=$y["organizer"];
        $d=$y["date"];
        $t=$y["time"];
        $l=$y["location"];
        $id=$y["id"];
        

        ?>
      <tr>
        <td><?php echo $n;?></td>
        <td><?php echo $o;?></td>
        <td><?php echo $d;?></td>
        <td><?php echo $t;?></td>
        <td><?php echo $l;?></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>
</div>
</body>
</html>