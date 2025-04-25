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
            height: 100vh; width: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        body .UpperHeading{
            display: none;
        }

        .mainBody{
            display: flex;
            margin: auto auto;
            height: 85vh;
            width: 80%;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            justify-content: space-evenly;
            align-items: center;
        }
        
        .heading{
            font-family: 'Edu TAS Beginner', cursive;
            font-size: 2vw;
            margin-bottom: 15px;
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            text-align: center;
        }
        .left_content{
            display: flex;
            width: 40%;
            align-items: center;
            flex-direction: column;
            /* margin-left: 15px; */
            font-family: 'Lato', sans-serif;
            color: #fff;
            font-weight: 400;
            font-size: medium;
        }
        img{
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

        .sentence{
            width: 100%;
        }
        pre {
            display: flex;
            justify-content: center;
        }

        .box{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            margin-right: 2rem;
            height: 75vh;
            width: 60%;
            background-color: #f8f9fa;
        }
        .user-details {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            /* gap: 2.2vw; */
        }

         .user-details form{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 45vw;
            font-size: 1rem;
        }

        input[type='text'],input[type='password'],input[type='tel'],input[type='email']{
            width: 18vw;
            height: 2rem;
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
            font-weight: 500;
            margin-bottom: 5px;
        }
        
        .btn{
            display: grid;
            justify-items: center;
            width: 100%;
        }
        .login-btn{
            display: grid;
            justify-items: center;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            background: #fff; 
            width: 50%;
        }
        .login-btn a{
            padding: 4%;
            color: #0062cc;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }
        input[type='submit']{
            margin-top: 4%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        
        .alert{
            position: absolute;
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 6px;
            width: 100%;
            border-radius: 5px;
            margin-top: 7vw;
        }
        .upperContent{
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30vw;
        }
        
         /*----------------media query----------------*/
        @media all and (min-width: 1001px) {
            
            
            .mainBody{
                width: 75%;
            }

            .box {
                display: flex;
                align-items: center;
                justify-content: center;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
                box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
                height: 72vh;
                margin-right: 1.5rem;
                width: 75%;
                background-color: #f8f9fa;
            }
        }

        @media all and (min-width: 600px) and (max-width: 800px) {
            
            .mainBody {
                height: 90vh;
            }
            
            .upperContent{
                display: none;
            }
            
            body .UpperHeading {
                display: block;
                margin-top: 10px;
            }
            
            .box {
                height: 81vh;
            }
            
            .user-details form {
                flex-direction: column;
            }

            input[type='text'],input[type='password'],input[type='tel'],input[type='email']{
                width: 26vw;
                font-size: 2.1vw;
            }
        }

        @media all and (max-width: 600px){
            body {
                height: 106vh;
            }
            
            .mainBody{
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: space-evenly;
                height: 95vh;
                width: 85%;
            }
            .upperContent{
                display: none;
            }
            
            body .UpperHeading {
                display: block;
                margin-top: 10px;
                width: fit-content;
            }

            .UpperHeading .heading {
                font-size: 4vw;
                margin-bottom: 0;
            }

            .left_content {
                width: 100%;
            }

            .heading1 h1 {
                font-size: 8vw;
            }

            pre{
                font-size: 1rem;
            }

            .img img {
                display: none;
            }

            .box {
                display: flex;
                align-items: center;
                height: 61vh;
                width: 85%;
                margin-right: 0;
            }

            .user-details form {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                width: 65vw;
                font-size: 1rem;
                justify-content: center;
            }

            input[type='text'], input[type='password'], input[type='tel'], input[type='email'] {
                width: 45vw;
            }

            input[type='submit'] {
                padding: 3%;
                width: 40vw;
            }

        }

    </style>
</head>
<body>
    <div class="upperContent UpperHeading">
        <div class="heading">
            <h1>Register Here</h1>
        </div>
    </div>
    <div class="mainBody">
        <div class="left_content">
            <div class="img"><img src="../Image/registration.png" height="100px" width="150px" alt="img"></div>
            <div class="heading1"><h1>Welcome</h1></div>
            <div class="sentence"><pre>The best preparation <br>for tomorrow is...<br>doing your best today.</pre></div>
            <div class="login-btn"><a href="login.php">Login</a></div>
        </div>
        <div class="box">
            <div class="user-details">
                <div class="upperContent">
                    <div class="heading">
                        <h1>Register Here</h1>
                    </div>
                </div>
                <div class="error"></div>
                
                <form action="Validation.php" id="registrationForm" method="POST">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Name" name="name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter username" name="username" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm password" name="confirm_passwd" required>
                    </div>
                    <!-- <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" placeholder="Enter number" name="number" pattern="[0-9]{10}" maxlength="10" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Email Id</span>
                        <input type="email" placeholder="Enter Email" name="email">
                    </div> -->
                    <div class="btn">
                        <input type="submit" id="registerForm" name="submit" value="submit">
                    </div>
                </form>
            </div>  
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            $("#registerForm").click(function () {
                if (validateForm()) {
                    $.post($("#registrationForm").attr("action"),
                        $("#registrationForm :input").serializeArray(),
                        function (info) {
                            $(".error").empty();
                            $(".error").html(info);
                        });
                }
                return false;
            });

            function validateForm() {
                var isValid = true;

                // Add validation for each required field
                $("#registrationForm input[required]").each(function () {
                    if ($(this).val() === '') {
                        alert("Error! Please fill in all required fields.");
                        isValid = false;
                        return false; // Stop the loop if any field is empty
                    }
                });

                return isValid;
            }
        });
    </script>

</body>
</html>