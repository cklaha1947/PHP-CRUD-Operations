<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
<form action="ins.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <p><label for=""><input type="text" name="name"></label></p>
    <p>Gender</p>
    <p><label ><input type="radio" name="gender" value="Male">Male</label></p>
    <p><label ><input type="radio" name="gender" value="Female">Female</label></p>
    <p><label ><input type="radio" name="gender" value="Other">Other</label></p>
    <p>Stream</p>
    <select name="stream" >
        <option value="">--Select--</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MCA">MCA</option>
        <option value="B.Tech">B.Tech</option>
    </select>
    <p>Subject</p>
    <p><label><input type="checkbox" name="sub[]" value="C">C</label></p>
    <p><label><input type="checkbox" name="sub[]" value="C++">C++</label></p>
    <p><label><input type="checkbox" name="sub[]" value="Java">Java</label></p>
    <p><label><input type="checkbox" name="sub[]" value="Python">Python</label></p>
    <p>Image</p>
    <p><input type="file" name="simg" ></p>
    <p><input type="submit" name="save" value="save"></p>
</form>
</body>
</html>