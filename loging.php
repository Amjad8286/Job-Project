
<?php  include "common.php"  ?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
              <div>
                <label for="recipient-name" class="col-form-label">Username/Email:</label>
                <input type="text" class="form-control" id="username1" name="name"
                  placeholder="Enter Your Username Or Email Address">
              </div>
              <div>
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="pass1" name="pass1"
                  placeholder="Enter Your Password">
              </div>
              <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary">login</button>
              </div>
            </form>

            
<?php if(isset($_POST['login'])){

$conn = mysqli_connect("localhost", "root", "", "givejob") or die("connection failed")  ;

$name=$_POST['name'];
$password=$_POST['pass1'];

$sql="SELECT name FROM register WHERE name='{$name}' AND password='{$password}'";
$result= mysqli_query($conn, $sql) or die("quiry failed");
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
session_start();
$_SESSION["name"]= $row['name'];
header ("Location: https://localhost/abdul/index.php" );
     }
  }else{ echo "note same";
  
  } 

}
?>