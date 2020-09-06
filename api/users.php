<?php
session_start();
require_once(__DIR__."/../config/dbh.php");
$user_conn = Open_Connection();

if (isset($_POST['sign-in'])){
  

    $psw= mysqli_real_escape_string($user_conn,$_POST['psw']);
    $email=mysqli_real_escape_string($user_conn,$_POST['email']);
    $sql ="SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($user_conn, $sql);
    $no_rows = mysqli_num_rows($result);
    if($no_rows ===1){
        
        $row = mysqli_fetch_array($result);
        echo $row['l_password'];
        echo $psw;
        if(password_verify($psw,$row['l_password'])){
            $_SESSION['login_user']=$row['l_username'];
            $_SESSION['login_email']=$email;
            $_SESSION['user_id'] = $row['l_id'];

            $sql12="SELECT * From 'users' where User_Type='Admin' AND email='$_SESSION[login_email]'";
                    $query = mysqli_query($user_conn,$sql12);
                         if($query ===1){
                             

            header("Location:/E-Commerce/admin/dashboard.php");
                         }
                         else{
                            header("Location:/E-Commerce/views/home.php");
                         }
        }
        else{
        $_SESSION['login_error']= "Invalid credentials. Please try again";
        header("location:/E-Commerce/views/Login.php");  
        }
    }   
    else{
        $_SESSION['login_error']= "Invalid credentials. Please try again";
        header("location:/E-Commerce/views/Login.php"); 

    }
}
if (isset($_POST['sign_up'])) {
    
    $_name = mysqli_real_escape_string($user_conn,$_POST['_name']);
    $_psw = mysqli_real_escape_string($user_conn,$_POST['_psw']);
    $hashed_psw = password_hash($_psw,PASSWORD_DEFAULT);
    $_email = mysqli_real_escape_string($user_conn,$_POST['_email']);
    $mysql = "SELECT email FROM users where email = '$_email'";
    $query = mysqli_query($user_conn, $mysql);

    if (mysqli_num_rows($query)) {
        echo "<h3>Email already taken. Please go back and use a different email address.</h3>";
    } else {
        // $subject = "User registration";
        // $msg = "Hi $_name, Welcome to E-commerce Solution.\n\nYour login details are:\n\nUsername=$_name.\nPassword=$_psw.\n\nPlease do not share your login details.\n\nThank you for joining our team.\n\n\nKind regards.\nThe Management Team.\nE-commerce Solution.";
        // $headers = "From: E-commerce Solution" . "\r\n" .
        //     "CC: $_email";

        // mail($_email, $subject, $msg, $headers);


        $sql = "INSERT INTO users (l_username, l_password, email, User_Type) VALUES ('$_name','$hashed_psw','$_email','User')";
        $result = mysqli_query($user_conn, $sql);

        if ($result) {
            $_SESSION['login_user'] = $_name;
            $_SESSION['login_email'] = $_email;
            header("Location:/E-Commerce/views/home.php");
           
            
        } else {
            echo "<h3> Customer credentials incorrect. Please go back and Try again </h3>";
        }
    }
}
else{
    $_SESSION['login_error']= "Invalid credentials. Please try again";
    header("location:/E-Commerce/views/Login.php"); 
}


function getAllCustomers()
{
    global $user_conn;
    $mysql_query = "SELECT * FROM users";
    $users = mysqli_query($user_conn, $mysql_query);
    return $users;
}

