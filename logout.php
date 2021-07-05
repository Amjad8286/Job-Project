<?PHP  
$conn = mysqli_connect("localhost", "root", "", "givejob");
session_start();
session_unset();
session_destroy();
header ("Location: https://localhost/abdul/index.php" );


?>