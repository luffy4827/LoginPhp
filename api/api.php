<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "","logindata")
or die("connection failed");
if(isset($_POST['Signup'])){
    $name = $_POST['name'];
    $username = $_POST['user'];
    $password = $_POST['password'];
    $query = "INSERT INTO userdata VALUES ('$name' , '$username' , '$password')";
    $run = mysqli_query($conn,$query);
    if($run){
        echo '<script> alert("Registration Successful");
        window.location="../index.html";
        </script>';
    } else {
        echo '<script> alert("Registration Failed"); </script>';
    }
}

if(isset($_POST['login'])){
    $user= $_POST['user'];
    $password = $_POST['password'];
    $checkQuery = "SELECT name FROM userdata where user='$user' AND password='$password'";
    $check = mysqli_query($conn, $checkQuery);
    if(mysqli_num_rows($check)>0){
        $fetch = mysqli_fetch_array($check);
        $name=$fetch['name'];
        $_SESSION['name']= $name;
        header("location:../routes/home.php");
    }  else {
        echo '<script> alert("Login Failed"); </script>';
    }
}

if (isset($_POST["logOut"])) {
    session_unset();
    session_destroy();
    header("location:../index.html");
}
?>