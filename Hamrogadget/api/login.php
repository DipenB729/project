<?php
session_start();
include("connect.php");
$phone = $_POST['phone'];
$password = $_POST['password'];


$check=mysqli_query($connect,"SELECT * FROM lab WHERE phone='$phone'AND password='$password'");
if(mysqli_num_rows($check)>0){
    $userdata=mysqli_fetch_array($check);
   echo'
   <script>
     alert("Login Successful");
      window.location="../index.php";
  </script>
 ';
}
else{
    echo'
    <script>
       alert("User not found!");
       window.location="../index2.html";
   </script>
  ';
}

?>