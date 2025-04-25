<?php 
include '../DB/connect.php'; include '../partials/links.php';
session_start();

$EmailAlert = false;
$showLoginAlert = false;
$logedIn = false;
$showAlert = false;

// Check is Registration completed

if(isset($_SESSION["register"])){
    ?>
    <script>
        alert("Registration Successfully");
    </script>
    <?php
    session_unset();
    session_destroy();
}

if(isset($_POST['login']))
{

    // check login details are true or not
    
    $enteredUsername = $_POST['username'];
    $enteredPasswd = $_POST['password'];

    $sql = "select * From user_details where username = '$enteredUsername' and password = '$enteredPasswd'";
    
    $result = mysqli_query($conn,$sql);
    

    $numOfRows = mysqli_num_rows($result);
    if($numOfRows > 0){

        $row = mysqli_fetch_assoc($result);
        
        // Access the 'name' field from the fetched row
        $enteredName = $row['name'];
        
        $logedIn = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $enteredUsername;
        $_SESSION['name'] = $enteredName;
        
        header("location: ../../After-Login/Home/dashboard-index.php");
    }else{
        $showLoginAlert = "Invalid Username or Password!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }
        body{
            display: flex;
            height: 100vh;
            width: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .heading {
            text-align:center; 
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin: 0px 0px 20px 0px
        }

        .heading h1 {
            font-size: 3.5vw;
        }

        .mainBody{
            display: flex;
            margin: auto auto;
            height: 80vh;
            width: 80%;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            justify-content: center;
            align-items: center;
        }

        .left_content{
            display: flex;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }

        .left_body {
            display: flex;
            width: 75%;
            align-items: center;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            color: #fff;
            font-weight: 400;
        }
        .img img{
            width: 13vw;
            height: 9vw;
            margin-bottom: 10px;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover{
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }

        .heading1{
            padding: 5px;
            margin-bottom: 15px;
        }
        
        .heading1 h1{
            font-size: 3.2vw;
        }

        pre{
            display: grid;
            justify-items: center;
            font-size: 1.3vw;
        }
        .sentence{
            width: 100%;
        }

        .box{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            margin-right: 2rem;
            height: 68vh;
            width: 60%;
            background-color: #f8f9fa;
        }
        .user-details{
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-around;
        }
        
        #login{
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 45vw;
            font-size: 1.2vw;
        }
        
        input[type='text'],input[type='password'],input[type='email']{
            width: 25vw;
            height: 2.2rem;
            padding-left: 5px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .input-box{
            margin: 10px;
        }

        form .input-box span.details{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type='file']{
            display: none;
        }

        .file-input{
            display: block;
            border: 1px solid black;
            width: 14rem;
            font-weight: lighter;
            height: 1.7rem;
            padding-left: 5px;
            padding-top: 2px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        
        
        .btn{
            display: flex;
            justify-items: center;
            margin-top: 2%;
            border: none;
            border-radius: 1.5rem;
            width: 13vw;
            align-items: center;
            justify-content: space-evenly;
        }
        .register {
            background: #fff;
            margin-top: 10%;
            width: 50%;
        }

        .btn a{
            padding: 4%;
            font-size: 1.5vw;
            color: #0062cc;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }
        .SendOTP_btn, input[type='submit']{
            margin-top: 5%;
            border: none;
            border-radius: 1.5rem;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            font-size: 1.5vw;
            height: 5.5vh;
            width: 11vw;
            cursor: pointer;
        }
        
        
        .alert{
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 5px;
            font-size: 1.2vw;
            width: 100%;
            border-radius: 5px;
        }

        

        .upperContent, .upperContent_forgotPasswd{
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            font-size: 1.5vw;
            margin-bottom: 1rem
        }
        .forgot_passwd{
            display: flex;
            margin-top: 10px;
        }

        .forgot_passwd a, #error {
            text-decoration: none;
            color: #9c4e4ebf;
            font-size: 1.2vw;
        }

        .forgot_passwd a:hover {
            color: red;
        }

        /*----------------verifyUser Model----------------*/

        .verifyUser{
            display: flex;
            align-items: center;
            z-index: 999999;
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            visibility: hidden;
            opacity: 0;
            transition: .3s ease;
        }

        .verifyUser.active{
            visibility: visible;
            opacity: 1;
        }

        .lock-logo {
            display: flex;
            align-items: center;
            width: 5.1rem;
            height: 5.1rem;
            border: 2px solid black;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        .verifyUser-body{
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            position: relative;
            background: #fff;
            width: 44vw;
            max-height: fit-content;
            margin: 20px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0 0 0 / 10%);
            transform: translateZ(-50px);
            transition: 1s ease;
        }

        .verifyUser.active .verifyUser-body{
            transform: translate(50%);
        }

        .verifyUser-body .modal-close-btn{
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
        }
        .verifies-details form{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .verifyUser-body .upperContent {
            display: flex;
            width: 75%;
            justify-content: space-evenly;
        }
        
        .upperContent p {
            margin-bottom: 10px;
        }

        .emailAlert{
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 5px;
            margin-top: 10px;
            font-size: 1.2vw;
            width: 100%;
            border-radius: 5px;
        }
        
        .btn-verify {
            margin-top: 20px;
        }


        
        /*-----------------------media query-------------------------*/

        @media all and (min-width: 600px){
            
            .mainBody {
                
            }
            .upperHeading {
                display: none;
            }

            .mainBody .upperContent{
                display: block;
            
            }

            input[type='password'], input[type='text'] {
                width: 20vw;
                height: 2.1rem;
            }
            
        }
        
        
        @media screen and (max-width: 600px){
            .heading1 h1{
                font-size: 7vw;
            }
            
            .mainBody{
                flex-direction: column;
                justify-content: space-evenly;
                margin-top: 5vw;
                width: 85%;
                height: 90vh;
            }

            .upperContent{
                display: none;
            }
            
            body .upperHeading {
                display: block;
                margin-top: 10px;
                margin-bottom: 0px;
                width: fit-content;
            }

            .UpperHeading .heading {
                /*font-size: 4vw;
                margin-bottom: 0;*/
            }

            .left_content{
                width: 100%;
                height: 30vh;
            }
            .left_body{
                width: 100%;
            }

            .left_body .img img {
                width: 31vw;
                height: 20vw;
            }
            
            .heading1{
                padding: 0;
            }
            .heading h1 {
                font-size: 8vw;
            }

            .sentence pre {
                font-size: 3.8vw;
            }

            .btn {
                width: 33vw;
                margin-top: 7%;
            }
            .btn a{
                font-size: 3vw;
            }
            .register.btn {
                height: 7vw;
            }

            .box{
                width: 85%;
                height: 45vh;
                margin-right: 0;
                border-top-left-radius: 15% 50%;
                border-bottom-left-radius: 15% 50%;
            }
            
            #login {
                width: 70vw;
                font-size: 4vw;
            }

            input[type='text'], input[type='password'], input[type='email'] {
                width: 47vw;
                height: 2.2rem;
                font-size: 3.5vw;
            }
            input[type='submit'] {
                height: 3.8vh;
                width: 33vw;
                font-size: 3vw;
            }
            .forgot_passwd a {
                font-size: 4vw;
            }
            .verifyUser.active .verifyUser-body {
                transform: translate(4%);
            }
            .verifyUser-body {
                justify-content: center;
                align-items: center;
                width: 86vw;
                transition: 1s ease;
            }
            .SendOTP_btn,input[type='submit']{
                font-size: 4vw;
                height: 3.8vh;
                width: 32vw;
            }
            .upperContent_forgotPasswd {
                font-size: 4.5vw;
            }
        }
          
    </style>
</head>
<body>
    <div class="upperContent UpperHeading">
        <div class="heading">
            <h1>Login Here</h1>
        </div>
    </div>

    <div class="mainBody">
        <div class="left_content">
            <div class="left_body">
                <div class="img"><img src="../Image/registration.png" height="100px" width="150px" alt="img"></div>
                <div class="heading1"><h1>Welcome</h1></div>
                <div class="sentence"><pre style="font-family: sans-serif">The best preparation <br>for tomorrow is...<br>doing your best today.</pre></div>
                <div class="register btn"><a href="register.php">Register</a></div>
            </div>
        </div>
        <div class="box">
            
            <div class="user-details">
                <form action="#" id="login" method="POST">
                    <div class="upperContent">
                        <div class="heading">
                            <h1>Login Here</h1>
                        </div>
                        <?php 
                            if($showLoginAlert){
                                echo "<div class='alert'>$showLoginAlert</div>";
                            }
                        ?>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" name="username" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Password</span>    
                        <input type="password" placeholder="Enter your password" name="password" required>
                            
                    </div>
                    
                    <div class="btn login">
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="forgot_passwd">
                        <p><a href="#">Forgot Password? Reset it!</a></p>
                    </div>
                </form>
            </div>
            <div class="verifyUser">
                <div class="verifyUser-body">
                    <i class="fas fa-times modal-close-btn"></i>
                    <div class="upperContent_forgotPasswd">
                        <div class="lock-logo">
                            <img src="../Image/lock.png" width="80px" height="80px" alt="">
                        </div>
                        <p>Trouble logging in?</p>
                    </div>
                    <div id='error'></div>
                    <div class="email verifies-details">
                        <form action="sendOTP.php" id="email" method="POST">
                            <div class="input-box">
                                <span class="details">Email Id</span>
                                <input type="text" placeholder="Enter registered Email id" id="EmailInput" name="email" required>
                            </div>
                            <div class="btn-verify">
                                <button type="submit" class="SendOTP_btn" id="verifyEmail_id" name="email verifyEmail">Send OTP</button>
                                <!-- <input type="submit" id="verifyEmail_id" name="email verifyEmail" placeholder="Send OTP" value="Send OTP"> -->
                            </div>
                        </form>
                    </div>
                    <div class="otp verifies-details">
                        <form action="VerifyOTP.php" id="OTP" method="POST">
                            <div class="input-box otp">
                                <span class="details">OTP</span>
                                <input type="text" placeholder="Enter OTP" name="otp" pattern="[0-9]{6}" maxlength="6" required>
                            </div>
                            <div class="btn-verify">
                                <input type="submit" id="verifyOTP" name="verifyOTP" value="Verify OTP">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script>

        let btn = document.getElementById("verifyEmail_id")
        let isListenerActive = false;
        
        
        btn.addEventListener("click", () => {
            if (!isListenerActive) {
                
                SendOTP_();
            }
        });
        
        // Fucntion for Send OTP
        function SendOTP_() {
            $.post($("#email").attr("action"), 
                   $("#email :input").serializeArray(), 
            function(info) {
                
                if(info === 'success'){
                    alert("OTP sent successfully");
                    
                    isListenerActive = true;
                    startTimer();
                }
                
                $("#error").empty();
                $("#error").html(info);

            });

            $("#email").submit(function () {
                return false;
            });
        }

        // Writing a function to display time
        function startTimer() {
            duration = 300000
            let timer = document.getElementById("verifyEmail_id")

            // Interval of 1 second
            let interval = setInterval(() => {

                // Getting the minutes from gives miliseconds
                let minutes = Math.floor(duration / 60000)    // Dividing by 60000, converts the miliseconds into the minutes

                // Getting the seconds from the miliseconds
                let seconds = ((duration % 60000) / 1000).toFixed(0)

                timer.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds

                duration -= 1000

                // Clear the time interval
                if (duration < 0) {
                    clearInterval(interval)
                    timer.textContent = "Resend OTP";
                    isListenerActive = false
                    // let session = <?php $_SESSION['OTP'] = false; ?>;
                    alert("Time Expired!");
                }

            }, 1000)
        }

        
        // JS Script for OTP Verification
        $("#verifyOTP").click( function(){

            $.post( $("#OTP").attr("action"),
                    $("#OTP :input").serializeArray(),
            function(info){

                $("#error").empty();
                $("#error").html(info);

            });

            $("#OTP").submit( function(){
                return false;

            });
        });

    </script>
    <script src="sample.js"></script>
</body>
</html>