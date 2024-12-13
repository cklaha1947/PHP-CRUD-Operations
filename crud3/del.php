<?php 
$con=mysqli_connect("localhost","root","","crud3");
$id=$_GET['did'];
$sel="SELECT * FROM students WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

unlink("student_img/".$fn);
$d="DELETE FROM students WHERE sid='".$id."'";
if ($con->query($d)) {
    header("location:sel.php");
}
?>