<?php

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

$sql = "INSERT INTO addjob (company,salary,des,experience)
VALUES ('$company', '$salary', '$description','$experience')";

if (mysqli_query($conn, $sql)) {
  header ("Location: https://localhost/abdul/backend/addjobtable.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header ("Location: https://localhost/abdul/addjobtable.php" );
mysqli_close($conn);
?>
