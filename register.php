<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass1'];

$conn = mysqli_connect("localhost", "root", "", "givejob");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql="SELECT name FROM register WHERE name ='{$name}' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)> 0){
echo "<p style='color:red;text-align:center;margin:10px 0;font-size'>alredy exists</p>";
}else{

$sql1 = "INSERT INTO register (name,email,password)
VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql1)) {
  header ("Location: https://localhost/abdul" );
} 
}

mysqli_close($conn);
?>
