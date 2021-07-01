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
      <!-- <h1 style>update from here</h1> -->
     <h1 class="text-center"> <span class="badge bg-dark " style="color:white">Insert from here</span></h1> 

<div class="container">
 
  <form action="addjob.php" method="post">
    <div class="form-group">
      <label for="comapny name">company name</label>
      <input type="text" class="form-control" id="company_name" placeholder="company name" name="company" required>
    </div>
    <div class="form-group">
        <label for="salary">salary:</label>
        <input type="text" class="form-control" id="salary" placeholder="salary" name="salary"required>
      </div>
      <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" placeholder="description" name="description" required>
      </div>
      <div class="form-group">
        <label for="experience">experience:</label>
        <input type="text" class="form-control" id="experience" placeholder="experience" name="experience" required>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
