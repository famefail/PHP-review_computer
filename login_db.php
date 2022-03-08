<?php 

     session_start();
     include('server.php');
     $errors = array();
    
     if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username)){  
          header('location: login.php');
        }
        if(empty($password)){
            header('location: login.php');
         }

         $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
         $result = mysqli_query($conn, $query);
    
         if(mysqli_num_rows($result) == 1){
                 $_SESSION['username'] = $username; 
                 header('location: index.php');
            }
            else{
                $_SESSION['error'] = "wroing user or password";
                array_push($errors, "password or user wrong");
                header('location: login.php');
            }
      }
      else{
          header('location: errors.php');
     }
   ?>