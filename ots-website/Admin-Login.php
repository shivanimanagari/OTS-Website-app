<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OTS";
$conn = mysqli_connect($servername,$username,$password,$dbname);
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserName=$_REQUEST['UserName'];
    $Password=$_REQUEST['Password'];
    $sql = "select * from Admins where (MailId='$UserName' or PhoneNumber='$UserName') and Password='$Password'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1){
        session_start();
        $_SESSION["UserName"]=$UserName;
        header("location: Admin-Home.php");
    }
    else
        echo "error";
}
$conn->close();
?>


<style>
    * {
        font-family: Arial, sans-serif;
    }

    body {
        margin: 0%;
        padding: 0%;
        background: -webkit-linear-gradient(-151deg, rgba(1, 186, 239, 0.9) 10%, rgba(124, 48, 239, 0.9) 111%);
    }

    .container {
        padding: 150px 0px;
    }

    .Login-Card {
        width: 460px;
        margin: auto;
        background-color: white;
        padding: 20px;
        text-align: center;
        color: grey;
    }

    .Login-Card img {
        margin-bottom: 30px;
    }


    .Login-Card input {
        padding: 12px;
        border: 1px solid #e4e4e4;
        border-radius: 0;
        margin-bottom: 20px;
        width: 100%;
    }

    .Login-Card input:focus {
        outline: none;
    }

    .toggle-password {
        position: absolute;
        padding: 12px 0px;
        margin-left: -30px;
        cursor: pointer;
    }

    .Login-Button {
        width: 100%;
        padding: 15px;
        background-color: #51b848;
        border-radius: 2px;
        border: none;
        color: white;
        cursor: pointer;
    }

    .Google-SignIn-button {
        border-radius: 10px;
        box-shadow: 1px 1px grey;
        border: 1px solid #e4e4e4;
        width: 200px;
        height: 45px;
        cursor: pointer;
    }

    .Google-SignIn-button:active {
        box-shadow: none;
    }

    .Pull-Left {
        align-items: start;
        display: inline-block;
    }

    .Login-Card a {
        text-decoration: none;
        cursor: pointer;
    }
</style>

<!DOCTYPE html>
<html>

<head>
    <title>Admin | Login</title>
    <link rel="icon" href="images/OTS-Logo-SM-Rbg.png" type="image/icon type">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
</head>

<body>
    <form action="" method="post">
    <div class="container">
        <div class="Login-Card">
            <div class="OTS-Logo">
                <a href="">
                    <img src="images/OTS-Logo-LG.png" height="70px" width="140px">
                </a>
            </div>
            <div class="UseName">
                <input type="text" placeholder="Email/Mobile" name="UserName" required>
            </div>
            <div class="Password">
                <input id="Password" type="password" placeholder="Password" name="Password" required>
                <span id="PasswordShowHide" class="fa fa-eye-slash toggle-password"></span>
            </div>
            <button type="submit" class="Login-Button">
                <span><i class="fa fa-lock"></i></span> Log In
            </button>
            <div>
                <p>Sign in with</p>
                <img src="images/Google.png" class="Google-SignIn-button">
            </div>
            <div>
                <a>Forgot your password?</a>
            </div>
        </div>
    </div>
    </form>
</body>

</html>

<script>
    var passwordIcon = document.querySelector("#PasswordShowHide");
    passwordIcon.addEventListener("click", PasswordToggle);
    var passwordField = document.querySelector("#Password");
    function PasswordToggle() {
        if (passwordField.getAttribute("type") == "password") {
            passwordIcon.setAttribute("class", "fa fa-eye toggle-password");
            passwordField.setAttribute("type", "text");
        }
        else {
            passwordIcon.setAttribute("class", "fa fa-eye-slash toggle-password");
            passwordField.setAttribute("type", "password");
        }
    }
</script>