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
  <style>
    /* Make the image fully responsive */
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
</head>

<body style="background-color:#c3e6cb">


  <nav class="navbar navbar-expand-lg navbar-light table-warning" id="mynavbar" style="position: -webkit-sticky;  top: 0;">
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact_us.html">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-info my-2 my-sm-0" type="button">Search</button>
      </form>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-secondary mx-2" data-bs-toggle="modal" data-bs-target="#signupmodal"
      data-bs-whatever="@fat">Sign Up</button>
    <button type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#loginmodal"
      data-bs-whatever="@fat">Log In</button>

    <!-- Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupmodal">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/sing_up" method="post">
              <div>
                <label for="recipient-name" class="col-form-label">User Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your User Name"
                  required>
              </div>
              <div>
                <label for="message-text" class="col-form-label">First Name</label>
                <input class="form-control" id="fname" name="fname" placeholder="Enter Your First Name" required>
              </div>
              <div>
                <label for="message-text" class="col-form-label">Last Name</label>
                <input class="form-control" id="lname" name="lname" placeholder="Enter Your Last Name" required>
              </div>
              <div>
                <label for="message-text" class="col-form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"
                  required>
              </div>
              <div>
                <label for="message-text" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Enter Your Password"
                  required>
              </div>
              <div>
                <label for="message-text" class="col-form-label">Confirm Password</label>
                <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Re Enter Your Password"
                  required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginmodal">Log In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/handlelogin" method="post">
              <div>
                <label for="recipient-name" class="col-form-label">Username/Email:</label>
                <input type="text" class="form-control" id="username1" name="username1"
                  placeholder="Enter Your Username Or Email Address">
              </div>
              <div>
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password1" name="password1"
                  placeholder="Enter Your Password">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
 
  <!--slider-->
  <div class="container my-3">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div style="max-height: 470px; "class="carousel-inner">
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
            <a href="jobview.html" class="btn btn-danger">View details</a>
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
  <footer class="py-5 bg-secondary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
  </footer>
</body>

</html>