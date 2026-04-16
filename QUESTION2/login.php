<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$result=$conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if($result->num_rows > 0 && $username=='Admin'){
$_SESSION['user']=$username;
header("location:dashboard.php");
}else{
echo "<p style='color:red;text-align:center;'>Invalid username or password</p>";
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <style>
    body {
        font-family: Arial;
        background: #f5f5f5;
    }

    form {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background: white;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #008080;
        color: white;
        border: none;
    }

    h2 {
        text-align: center;
    }
    </style>

</head>

<body>

    <form method="POST">
        <h2>Admin Login</h2>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button name="login">Login</button>

        <p style="text-align:center;margin-top:10px;">
            No account? <a href="register.php">Register</a>
        </p>

    </form>

</body>

</html>