<?php 
require('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="container">
        <p class="heading">Admin Login in</p>
        <form action="" method="post">
        <div class="box">
            <p>Username</p>
            <div>
                <input type="text" name="username" id="" placeholder="Enter Your Username">
            </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div>
                <input type="password" name="pass" id="" placeholder="Enter Your Password">
            </div>
        </div> 

        <input type="submit" name="submit" class="loginBtn" value="Login"> 
        <a href="index.html" ><div class="loginBtn1"> Back</div></a>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $sql_login="SELECT * FROM admin WHERE username='$username'";
    $res_login=mysqli_query($conn,$sql_login);
    $row=mysqli_fetch_array($res_login,MYSQLI_ASSOC);
    $password=$row['password'];
    if($pass==$password){
        header('location: admin_index.php');
}
    else{
    ?>
    <script>
        alert('Invalid Username or password');
    </script>
    <?php
    }
}


?>