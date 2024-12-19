<?php
$c=mysqli_connect("localhost","root","","blood_management_system");
$id=$_GET['y'];
if(isset($_POST["btn"]))
{
    $f=$_POST["firstname"];
    $l=$_POST["lastname"];
    $a=$_POST["address"];
    $m=$_POST["contact"];
    $g=$_POST["gender"];
    $b=$_POST["bgr"];
        $s="update donor1 set firstname='$f',lastname='$l',address='$a',contact='$m',gender='$g',bgr='$b' WHERE id='$id'";
       
       $p=mysqli_query($c,$s);
        if($p)
        {
            header("Location:list.php");
        }
 }
?>