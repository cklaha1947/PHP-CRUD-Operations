<?php 
$con=mysqli_connect("localhost","root","","crud3");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="sel.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Basic Table</h2>

  <?php 
  if (isset($_GET['keyword'])) {
    $keyword=$_GET['keyword'];
  } else {
    $keyword="";
  }
  ?>

  <form action="" class="d-flex" method="GET" >
    <input type="search" class="form-control me-sm-2" placeholder="Search" name="keyword" required maxlength="70" autocomplete="off" value="<?= $keyword; ?>">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    <a href="sel.php">
    <button class="btn btn-primary my-2 my-sm-0" type="button">Reset</button>
    </a>
  </form>
  <a class="btn btn-success" href="index.php">Add New</a>           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Stream</th>
        <th>Subject</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $keyword=$_GET['keyword'];
        $sel="SELECT * FROM students WHERE name like '%$keyword%' or gender like '%$keyword%' ";
        $rs=$con->query($sel);
        while($row=$rs->fetch_assoc()) {
        ?>
     <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['stream']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><img src="student_img/<?php echo $row['simg']; ?>" class="myimg" alt=""></td>
        <td><a class="btn btn-primary" href="edit.php?eid=<?php echo $row['sid']; ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="del.php?did=<?php echo $row['sid']; ?>">Delete</a></td>
     </tr>
     <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>


