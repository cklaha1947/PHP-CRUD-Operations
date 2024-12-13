<?php 
 $con=mysqli_connect("localhost","root","","crud3");
 $id=$_GET['eid'];
 $sel="SELECT * FROM students WHERE sid='$id'";
 $rs=$con->query($sel);
 $row=$rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sel.css">
</head>
<body>
    
<form action="upd.php" method="post" enctype="multipart/form-data">
    <input type="text" name="id" value="<?php echo $row['sid']; ?>">
    <p>Name</p>
    <p><label for=""><input type="text" name="name" value="<?php echo $row['name']; ?>"></label></p>
    <p>Gender</p>
    <p><label ><input <?php if($row['gender']=="Male"){echo "checked";} ?> type="radio" name="gender" value="Male">Male</label></p>
    <p><label ><input <?php if($row['gender']=="Female"){echo "checked";} ?> type="radio" name="gender" value="Female">Female</label></p>
    <p><label ><input <?php if($row['gender']=="Other"){echo "checked";} ?> type="radio" name="gender" value="Other">Other</label></p>
    <p>Stream</p>
    <select name="stream" >
        <option  value="">--Select--</option>
        <option <?php if($row['stream']=="BCA"){echo "selected";} ?> value="BCA">BCA</option>
        <option <?php if($row['stream']=="BBA"){echo "selected";} ?> value="BBA">BBA</option>
        <option <?php if($row['stream']=="MCA"){echo "selected";} ?> value="MCA">MCA</option>
        <option <?php if($row['stream']=="B.Tech"){echo "selected";} ?> value="B.Tech">B.Tech</option>
    </select>

    <?php 
        $sb=explode(",",$row['subject']);
    ?>
    <p>Subject</p>
    <p><label><input <?php if(in_array("C",$sb)){echo "checked";} ?> type="checkbox" name="sub[]" value="C">C</label></p>
    <p><label><input <?php if(in_array("C++",$sb)){echo "checked";} ?> type="checkbox" name="sub[]" value="C++">C++</label></p>
    <p><label><input <?php if(in_array("Java",$sb)){echo "checked";} ?> type="checkbox" name="sub[]" value="Java">Java</label></p>
    <p><label><input <?php if(in_array("Python",$sb)){echo "checked";} ?> type="checkbox" name="sub[]" value="Python">Python</label></p>
    <p>Image</p>
    <p><input type="file" name="simg" ></p>
    <p><img class="myimg" src="student_img/<?php echo $row['simg']; ?>" alt=""></p>
    <p><input type="submit" name="save" value="save"></p>
   
</form>
</body>
</html>