
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
 


<h1 class="text-center"> <span class="badge bg-danger " style="color:white">Get Your Favorite Job From Here</span></h1> 


  <!--card-->
 
  <div class="container-fluid " style="margin-right: 86px;">
  <?php

if(isset($_GET['search'])){

  $search_term=$_GET['search'];

}


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
    
    $sql = " SELECT id,company,salary,des,experience,image FROM addjob WHERE company LIKE  '%$search_term%' ORDER BY id DESC ";
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
  margin-right: auto; object-fit:cover;">
          <hr style="background-color:red; opacity:1">
          <h4 class="card-title"><?php echo $row["company"]?></h4>
          <img src="backend/upload/<?php echo $row["image"]?>" alt="image" style="width:35px; height:35px ; margin-top: -33px; float:right">
            <h6 class="card-title my-3" >salary: <span class="badge bg-success " style="color:white; "><?php echo $row["salary"]?></span></h6>
            <h6 class="card-title my-3" >Experice: <span class="badge bg-warning " style="color:white"><?php echo $row["experience"]?></span></h6>
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
 