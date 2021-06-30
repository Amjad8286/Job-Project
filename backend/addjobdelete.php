
<?Php


$job_id=$_GET['id'];
// Create connection
$conn = mysqli_connect("localhost", "root", "", "givejob");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM addjob WHERE id={$job_id}";

if (mysqli_query($conn, $sql)) {
    header ("Location: https://localhost/abdul/backend/addjobtable.php" );
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  //header ("Location: https://localhost/abdul/addjobtable.php" );
  mysqli_close($conn);
?>