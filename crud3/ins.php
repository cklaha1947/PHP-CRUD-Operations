<?php 
if (isset($_POST['save'])) {
    $n=$_POST['name'];
    $g=$_POST['gender'];
    $s=$_POST['stream'];

    if (isset($_POST['sub'])) {
        $sb=implode(",",$_POST['sub']);
    } else {
        $sb="";
    }
    $buf = $_FILES['simg']['tmp_name'];
    $fn = time().$_FILES['simg']['name'];
    move_uploaded_file($buf,"student_img/".$fn);
}
$con=mysqli_connect("localhost","root","","crud3");
$ins="INSERT  INTO students SET name='$n', gender='$g', stream='$s', subject='$sb', simg='$fn' ";
if ($con->query($ins)) {
    header("location:sel.php");
} else {
    echo "403 FORBIDDEN";
}
?>