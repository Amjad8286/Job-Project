


<?php 

session_start();

if(!isset($_SESSION['name'])){
  header ("Location: https://localhost/abdul/loging.php" );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Find Job here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
  
</head>

  <style>
    .container {
      border: 0.5px solid;
      border-radius: 20px;

      position: center;
      border: 1px solid #9ca99f;
      border-radius: 6px;
      padding: 24px 24px 0;
      max-width: 920px;
      margin-top: 3rem;

    }
  </style>




  <!-- view// -->
  <?php
  
  $viewjob=$_GET['id'];
 
    $conn = mysqli_connect("localhost", "root", "", "givejob");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = " SELECT id,company,salary,des,experience,image FROM addjob WHERE id={$viewjob}";
    $result= mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
  
      while($row = mysqli_fetch_assoc($result)) {
  
  ?>
  <h1 class="text-center display-5 my-5">Job in <?php echo $row['company']?></h1>
  
  <div class="container table-warning">
  <img src="backend/upload/<?php echo $row["image"]?>" alt="image" style="width:100px; height:100px ; float:right">
    <h1 class="name"><span class="badge bg-danger " style="color:white; ">
        <?php echo $row['company']?>
        
      </span></h1>
      
    <h3 class="salary my-4">Salary:
      <?php echo $row['salary']?>
    </h3>
    <h3 class="exp">Experiance:
      <?php echo $row['experience']?>
    </h3>
    <p class="des my-4">
    <h3>Job Details:</h3>
    <?php echo $row['des']?>
    </p>
    <button id="message"style="margin-left: 23rem;" onclick="message()" class="btn btn-success my-2">Apply now</button>
  </div>
  <?php
         }
      }

?>


  <script>

function message() {
  alert("Your Application is submitted")

}

  </script>

</body>

</html>k