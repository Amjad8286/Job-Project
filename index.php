
 <?php  include "common.php"  ?>
 <style>
     .carousel-inner img {
        width: 100%;
        height: 100%;
      }
  
      #cardstyle {
        border: 2px solid red;
  
      }
  
      .jumbotron.text-center {
        background-color: rgb(52 58 64);
      }
      .row {
      --bs-gutter-x: -12.5rem;
      --bs-gutter-y: 0;
      display: flex;
      flex-wrap: wrap;
      margin-top: calc(var(--bs-gutter-y) * -1);
      margin-right: calc(var(--bs-gutter-x) * -.5);
      margin-left: calc(var(--bs-gutter-x) * -.5);
      align-content: stretch;
      justify-content: center;
      align-items: flex-start;
      flex-direction: row;
  }
  .carousel-caption{
    padding-bottom: 18.25rem;
  }



  </style>
  <!--slider-->
  <div class="container my-3">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div style="height: 470px; "class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/3.jpg" alt="Los Angeles" >
          <div style="" class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
            <h1>abdul rehman</h1>
            <input type="text" id="fname" name="fname" value="John">

          </div>

        </div>
        <div class="carousel-item">
          <img src="img/1.jpg" alt="Chicago" >
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" alt="New York">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  <!--slider-->
<hr>

<h1 class="text-center"> <span class="badge bg-danger " style="color:white">Get Your Favorite Job From Here</span></h1> 


  <!--card-->
 
  <div class="container-fluid table-success" style="margin-right: 86px;">
  <?php
  // Create connection
    $conn = mysqli_connect("localhost", "root", "", "givejob");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = " SELECT id,company,salary,des,experience FROM addjob";
    $result= mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    
  ?>
    <div class="row ">
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 ">
        <div class="card " id="mycard" style="width:20rem;margin:20px 0px 20px 25px">
       
          <div class="card-body table-warning">  
          
         
            <h4 class="card-title"><?php echo $row["company"]?></h4>
            <h6 class="card-title text-right" >salary: <span class="badge bg-success " style="color:white; "><?php echo $row["salary"]?></span></h6>
            <h6 class="card-title text-right" >Experice: <span class="badge bg-warning " style="color:white"><?php echo $row["experience"]?></span></h6>
            <p class="card-text"><b> description: </b><br><?php echo substr($row["des"],0,50)."...."?></p>
            <a href="jobview.php?id=<?php echo $row['id'] ;?>" class="btn btn-danger">View details</a>
        </div>
    
    
        </div>
      </div>
      <?Php
  }
  ?>
    </div>
    <?Php
  }
  ?>
     
  </div>

  <!--card-->
  <?php  include "footer.php"  ?>