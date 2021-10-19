<?php
require_once 'connect.php';
$email=$password='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=trim($_POST['email']);
$password=trim($_POST['pswd']);
$sql="SELECT * FROM user_detail where email='$email' and password=$password";
$sql1="SELECT name FROM user_detail where email='$email'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
 if($count == 1){  
   
    header("Location: welcome.php"); 
    echo $sql1;
        }  
        else{  
           echo "<p>Click here to <a href='signin.php'>Login</a> again.</p>"; 
        }     
}
?>