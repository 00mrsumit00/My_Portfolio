<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        include('partials/db/db_connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        $no_of_rows = mysqli_num_rows($result);

        if($no_of_rows > 0){
            session_start();
            $_SESSION['loggedin'] = TRUE;
            header('location: student/index.php');
        }
        else{
            echo "<script> alert('Invalid Username or Password') </script>";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Admin</title>
    <style> 
         * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        body{
            background-color: #F8FFF5;
            overflow-x: hidden;
        }

        .header {
            width: fit-content;
            margin: 7vh auto;
            font-size: 2.5em;
            font-weight: 700;
        }

        .header span {
            color: #FF735C;
        }

        .admin-main{
            height: 100vh;
            width: 100vw;
            position: relative;
            display: flex;
        }

        .admin-main .left{
            width: 50%;
            height: 100%;
            padding-left: 65px;
        }

        .admin-main .left img{
            position: absolute;
            height: 100%;
        }

        .admin-main .right {
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-right: 65px;
        }

        .admin-main .right form{
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            border: 2px solid blue;
            padding: 35px;
            border-radius: 7px;
            background-color: rgb(245, 242, 242);
        }

        .admin-main .right form .inp {
            width: 18vw;
            height: 7vh;
            padding: 4px 0px 0px 10px;
            border-radius: 4px;
        }
        
        .admin-main .right form .inp::placeholder {
            font-size: 1.4em;
        }
        
        .admin-main .right form .btn {
            width: 18vw;
            height: 7vh;
            background-color: rgb(93, 93, 190);
            color: white;
            font-size: 1.2em;
            border-radius: 4px;
        }

        .admin-main .right form .btn:hover {
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="header">
        <p>Welcome to login, Admin of <span> Campus Diary </span> </p>
    </div>
    <div class="admin-main temp">
        <div class="left">
            <img src="../images/children.jpg" alt="">
        </div>
        <div class="right">
            <form action="#" method="post">
                <h1>Admin Login</h1>
                <input type="text" name="username" class="inp" placeholder="Username">
                <input type="password" name="password" class="inp" placeholder="Password">
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

