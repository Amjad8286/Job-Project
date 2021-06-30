
<?php
$id=$_POST['id'];
$company=$_POST['company'];
$salary=$_POST['salary'];
$description=$_POST['description'];
$experience=$_POST['experience'];




// Create connection
$conn = mysqli_connect("localhost", "root", "", "givejob");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE addjob SET company='{$company}', salary='{$salary}', des='{$description}', experience='{$experience}' WHERE id={$id}";


if (mysqli_query($conn, $sql)) {
  header ("Location: https://localhost/abdul/backend/addjobtable.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header ("Location: https://localhost/abdul/addjobtable.php" );
mysqli_close($conn);
?>
