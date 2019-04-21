<?php

// $host = "localhost";
// $name = "Ab";
// $email = "root";
// $user = "root";
// $password = "root";
// $confirm_psw = "root";
// $db = "sign";
// mysqli_connect($host, $name, $email, $user, $password, $confirm_psw);
// $link = mysqli_connect($host, $name, $email, $user, $password, $confirm_psw);
// mysqli_select_db($link, $db);
// if (isset($_POST['name'])) {
//     $ufullname = $_POST['name'];
//     $uemail = $_POST['email'];
//     $uname = $_POST['username'];
//     $password = $_POST['psw'];
//     $conf_password = $_POST['cpsw'];

//     $sql = "select * from signinfrom where name='" . $ufullname . "' email='" . $uemail . "' user='" . $uname . "' Pass='" . $password . "' confPass='" . $conf_password . "' limit 1";

//     $result = mysqli_query($link, $sql);

//     if (mysqli_num_rows($result) == 1) {
//         echo " Welcome " . $ufullname;
//         // <h2>What is up </h2>
//         exit();
//     } else {
//         echo " You Have Entered Incorrect Password";
//         exit();
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <script type="text/javascript" src="resources/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="logSign.js"></script>

</head>
<body class= "signUpBody">
        <form action="/action_page.php">
            <div id="signUp">
                    <div class="form">
                        <form class="register">
                            <input type="text" placeholder="Full Name" name="name" required>
                            <input type="text" name="mail" placeholder="email" name="email" required >
                            <input type="text" name ="userid" placeholder="username" name="username" required>
                            <input type="password" name="pswd" placeholder="password" name="psw" equired>
                            <input type="password" name="pswd_c" placeholder="confirm-password" name="cpsw" required>
                        </form>
                            <button type= "submit" class="registerbtn">Create</button>
                            <p class ="message">
                                Already Register?
                                <a href='login.php'>Log In</a>
                            </p>
                    </div>
          </form>

    </div>
</body>
</html>
