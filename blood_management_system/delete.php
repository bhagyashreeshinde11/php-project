<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
$id=$_GET['y'];
$s="DELETE FROM donor1 WHERE id=$id";
$z=mysqli_query($c,$s);
if($z)
{
    header("Location:list.php");
}
?>