<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<a class="btn btn-primary btn-lg my-4 mx-4" href="addjobtable.php" role="button">Go Back</a>
<h1 class="text-center"> <span class="badge bg-dark " style="color:white">update from here</span></h1> 
      <?php
      $job_id=$_GET['id'];
// Create connection
  $conn = mysqli_connect("localhost", "root", "", "givejob");
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = " SELECT id,company,salary,des,experience FROM addjob WHERE id={$job_id}";
  $result= mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
    
?>
<div class="container">
  
 
  <form action="update.php" method="post">

 <div class="form-group">
      <label for="comapny name">company name</label>
      <input type="hidden" class="form-control" id="id" value="<?php echo $row['id']?>" name="id">
      <input type="text" class="form-control" id="company_name" value="<?php echo $row['company']?>" name="company" required>
    </div>

    <div class="form-group">
        <label for="salary">salary:</label>
        <input type="text" class="form-control" id="salary" value="<?php echo $row['salary']?>"  name="salary" required>
      </div>
      <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" value="<?php echo $row['des']?>" name="description" required>
      </div>
      <div class="form-group">
        <label for="experience">experience:</label>
        <input type="text" class="form-control" id="experience" value="<?php echo $row['experience']?>" name="experience" required>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php }?>
</div>
<?php }?>
</body>
</html>
