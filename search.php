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
  .card{
   border-color: red
  }
/* pagination */

.ul{
  display:flex;
  justify-content: center;

}

.li {
  margin: 2px;
  display: inline-block;
}

.li a{
  color: black;
display: block;
  border: 1px solid #dc3545;
    text-decoration: none;
    font-size: 26px;
    padding: 4px;
    background-color: #ffeeba;
    border-radius: 5px;
}

.active a{
  background-color: #dc3545;
}



/* /pagination */


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
          <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Los Angeles" >
          <div style="" class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
            <h1>abdul rehman</h1>
            <input type="text" id="fname" name="fname" value="John">

          </div>

        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Chicago" >
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="New York">
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
 
  <div class="container-fluid " style="margin-right: 86px;">
  <?php
  // Create connection
    $conn = mysqli_connect("localhost", "root", "", "givejob");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $limit=9;

      if(isset($_GET['page'])){

          $page= $_GET['page'];
 }else{

  $page=1;
 }
      $offset= ($page-1)*$limit;

    $sql = " SELECT id,company,salary,des,experience,image FROM addjob ORDER BY id DESC LIMIT {$offset}, {$limit} ";
    $result= mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    
  ?>
    <div class="row ">
    <?php
    while($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="col-md-4 ">
        <div class="card " id="mycard" style="width: 20rem;margin:20px 0px 20px 25px">
       
          <div class="card-body">  
          
          <img class="card-img-top my-2" src="backend/upload/<?php echo $row["image"]?>" alt="image" style="width:200px; height:150px ;display: block;
  margin-left: auto;
  margin-right: auto;">
          <hr style="background-color:red; opacity:1">
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
    
  
  
  
  // pagination
  $sql1= "SELECT * FROM addjob ";
  $result1=  mysqli_query($conn, $sql1) or die("query failed");
  if (mysqli_num_rows($result1) > 0) {
  $total_records= mysqli_num_rows($result1);
 
  $total_pages= ceil( $total_records/$limit);
  
  
  echo' <ul class="ul">';
  for($i=1; $i <=$total_pages; $i++){
   
   if($i==$page){
$active = "active";
   }else{
    $active= "";
    
   }
   
    echo '<li class="li '.$active.'" ><a href="index.php?page='.$i.'" >'.$i.'</a></li> ';
  }
  
  echo'</ul>';
  }
  
  }

  ?>
  
  </div>

  <!--card-->
  <?php  include "footer.php"  ?>