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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="stylesheet.css"> -->

</head>
<style>
  .btn-rounded {
    border-radius: 10em;
    background-color: #ff3547 !important;

  }

  .btn {
    font-size: .81rem;

  }

  .container {
    max-width: 30%;
  }
  
</style>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="mynavbar" style="position: -webkit-sticky;  top: 0;">
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
    </div>
  </nav>
  <div class="text-center">
    <form class="container my-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <img class="mb-4" src="https://graphicpick.com/wp-content/uploads/edd/2016/05/find-jobs-logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">User name</label>
      <input type="username" id="username1" name="name" class="form-control" placeholder="user name" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass1" name="pass1" class="form-control" placeholder="Password" required="">
     
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  </div>


  <?php if (isset($_POST['login'])) {

    $conn = mysqli_connect("localhost", "root", "", "givejob") or die("connection failed");

    $name = $_POST['name'];
    $password = $_POST['pass1'];

    $sql = "SELECT name FROM register WHERE name='{$name}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql) or die("quiry failed");
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        session_start();    
        $_SESSION["name"] = $row["name"];
        header("Location: https://localhost/abdul/index.php");
      }
    } else {
      echo "note same";
    }
  }
  ?>