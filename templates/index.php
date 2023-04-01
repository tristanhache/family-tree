<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost","root","","mydb");
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['role'] = $row['role'];
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        die();
    }
    else{
        echo "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter your username"><br><br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
