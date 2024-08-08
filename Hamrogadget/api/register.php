<?php
include("connect.php");
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $cpassword = $_POST['cpassword'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $accept = isset($_POST['accept']) ? $_POST['accept'] : 'no';
    $terms = isset($_POST['terms']) ? $_POST['terms'] : 'no';
    print_r($_POST);
    

    if($password==$cpassword)
    {
       
        $insert = mysqli_query($connect,"INSERT INTO lab(phone,password,fname,email) VALUES('$phone','$password','$fname','$email')");
        if($insert){
         echo'
           <script>
             alert("Registration successful");
             window.location="../index2.html";
           </script>
           ';
           
    }
        else{
        echo '
          <script>
             alert("Error Occured!");
             window.location="../registration.html";
          </script>
          ';
    }
    }
    else{
        echo'
          <script>
             alert("Password does not match!");
             window.location="../registration.html";
             
         </script>
        ';
       
    }
    
    
?>
