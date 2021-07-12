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

.btn-rounded {
    border-radius: 10em;
    background-color: #ff3547 !important;
    
}
.btn{
  padding: .84rem 2.14rem;
    font-size: .81rem;
    margin: .375rem
}
</style>

<body >


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mynavbar" style="position: -webkit-sticky;  top: 0;">
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact_us.php">Contact Us</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="btn btn-success" href="backend/addjob1.php">Addjob</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="loging.php">Loging</a>
        </li>
        <li class="nav-item">
          <a  class="btn btn-danger " href="logout.php">Logout</a>
        </li>
      </ul>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-secondary mx-2" data-bs-toggle="modal" data-bs-target="#signupmodal"
      data-bs-whatever="@fat">Sign Up</button>

    <!-- Modal -->
    <div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupmodal">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="register.php" method="POST">
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

  </nav>
 
