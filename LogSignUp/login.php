
<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "log";
mysqli_connect($host, $user, $password);
$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link,$db);
if (isset($_POST['email'])) {
    $uname=$_POST['email'];
    $password=$_POST['psw'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($link,$sql);
    
    if(mysqli_num_rows($result)==1){
        // echo " Welcome ". $uname;
        echo '<script>window.location = "login.html"</script>';
        // <h2>What is up </h2>
        exit();
    }
    else {
        // echo " You Have Entered Incorrect Email or Password ";
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        exit();
    }  
}

?>

<!DOCTYPE html>
<html>
<head>
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class= "LogInBody">
    <form action="" method = "post">  
        <div class="LogIn">
            <div class="form">
            <form class="Register">
                <input type="text" placeholder="username or email" name="email" required>
                <input type="password" placeholder="password" name="psw" required>
            </form>
            <input type="checkbox" > Remember me <br>
                <button type= "submit" class="registerbtn">Log in</button>
                <p class ="message">
                    Need an account
                <a href='signup.php'>Sign Up</a>
                </p>
        </div>

    </div>
</form>

</body>
</html>
