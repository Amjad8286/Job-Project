<?php  include "common.php"  ?>
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
  <img src="backend/upload/<?php echo $row["image"]?>" alt="image" style="width:200px; height:200px ; float:right">
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