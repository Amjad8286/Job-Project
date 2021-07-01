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


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mynavbar" style="margin:24px 0;">

    
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="addjob1.php">add job input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addjobtable.php">Addjob table</a>
            </li>
           
          </ul>
         
        </div>
      </nav>

<?php
// Create connection
  $conn = mysqli_connect("localhost", "root", "", "givejob");
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = " SELECT id,company,salary,des,experience FROM addjob";
  $result= mysqli_query($conn, $sql);

  
?>
  
<div class="container">
 
  <?php            
  if (mysqli_num_rows($result) > 0) {
     ?>      
  <table class="table" >
    <thead class="thead-dark text-center">

      <tr>
        <th>id</th>
        <th>comapny name</th>
        <th>salary</th>
        <th>description</th>
        <th>experience</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody class="text-center" >
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["company"]?></td>
    <td><?php echo $row["salary"]?></td>
    <td><?php echo $row["des"]?></td>
    <td><?php echo $row["experience"]?></td>
    <td><a class="btn btn-danger sm" href="addjobdelete.php?id=<?php echo $row['id'] ;?>">delete</a>
    <a class="btn btn-primary sm" href="addjobupdate.php?id=<?php echo $row['id'] ;?>">uppdate</a></td>
  </tr>
  <?Php
}
?>
    </tbody>
  </table>
  <?Php
  }
  ?>
</div>

</body>
</html>
