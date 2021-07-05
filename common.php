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
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
  
</head>

<body style="background-color:#c3e6cb">


  <nav class="navbar navbar-expand-lg navbar-light table-warning" id="mynavbar" style="position: -webkit-sticky;  top: 0;">
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact_us.php">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-info my-2 my-sm-0" type="button">Search</button>
      </form>
   
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
            <form action="register.php" method="post">
              <div>
                <label for="recipient-name" class="col-form-label">User Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your User Name"
                  required>
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
             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- login -->
    <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginmodal">Log In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
              <div>
                <label for="recipient-name" class="col-form-label">Username/Email:</label>
                <input type="text" class="form-control" id="username1" name="name"
                  placeholder="Enter Your Username Or Email Address">
              </div>
              <div>
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="pass1" name="password1"
                  placeholder="Enter Your Password">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">loging</button>
              </div>
            </form>

<?php if(isset($_POST['loging'])){

$conn = mysqli_connect("localhost", "root", "", "givejob");

$name=$_POST['name'];
$password=$_POST['pass1'];

$sql="SELECT name FROM register WHERE name='{$name}' AND password='{$password}'";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
session_start();
$_SESSION['name']=$row['name'];
header ("Location: https://localhost/abdul/index.php" );

  }

}else{ echo "note same";}

} 
?>


          </div>
        </div>
      </div>
    </div>
  </nav>
 
