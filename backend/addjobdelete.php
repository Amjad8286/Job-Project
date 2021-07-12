
<?Php


$job_id=$_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "givejob");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql1 = " SELECT * FROM addjob  WHERE id={$job_id}" ;
$result= mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);

unlink("upload/".$row['image']);


$sql="DELETE FROM addjob WHERE id={$job_id}";

if (mysqli_query($conn, $sql)) {
    header ("Location: https://localhost/abdul/backend/addjobtable.php" );
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  //header ("Location: https://localhost/abdul/addjobtable.php" );
  mysqli_close($conn);
?>