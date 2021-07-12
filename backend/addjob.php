<?php

if(isset($_FILES['image'])){

  $errors=array();

$file_name=$_FILES['image']['name'];
$file_size=$_FILES['image']['size'];
$file_tmp=$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$file_ext=end(explode('.',$file_name));
$extension=array("jpeg","jpg","png");

if(in_array($file_ext,$extension)===false)
{
  $errors[]="this extension not allow";
}

  if($file_size>2097152){
    $errors[]="this size not allow";
}

if(empty($errors)==true){

  move_uploaded_file($file_tmp,"upload/".$file_name);
}else{
print_r($errors);
die();

}
}

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

$sql = "INSERT INTO addjob (company,salary,des,experience,image)
VALUES ('$company', '$salary', '$description','$experience','$file_name')";

if (mysqli_query($conn, $sql)) {
  header ("Location: https://localhost/abdul/backend/addjobtable.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header ("Location: https://localhost/abdul/addjobtable.php" );
mysqli_close($conn);
?>
