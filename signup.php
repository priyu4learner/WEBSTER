<?php
require_once 'connect.php';
$name=$email=$password=$cpassword="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["uname"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
 
  $sql = "INSERT INTO user_detail (name, email, password) VALUES ('$name','$email',$password)";
  $sql = "CREATE TABLE $name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    amount INT(30) ,
    source VARCHAR )";
    mysqli_multi_query($conn, $sql);
if ($conn->store_result()) {
  header("Location: front.php"); 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

