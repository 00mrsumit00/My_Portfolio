<?php 
include '../partials/links.php'; include '../DB/connect.php';
session_start();

// <-----------Forgot Password Validations----------->

if(isset($_SESSION['USERNAME'])){
    $newPasswd = $_POST['newPasswd'];
    $enteredUsername = $_POST['username'];
    $UsernamefromSession = $_SESSION['USERNAME'];

    if($UsernamefromSession == $enteredUsername){
        $query = "UPDATE `user_details` SET `password`='$newPasswd' WHERE username = '$enteredUsername'";

        $sql = mysqli_query($conn,$query);

        if($sql){
            ?>
            <script>
                alert('Password Update Succesfully')
            </script>
            <?php
            session_unset();
            session_destroy();
            echo '<script>window.location.href = "login.php";</script>';
            exit;
        }

    }else{
        echo "<script>alert('Error! Invalid Username!')</script>";
        exit;
    }
}
// else{
//     echo "<script>alert('Error! First Verify Your Email id')</script>";
//     exit;
// }


// <-----------Registration Form Validations----------->

$registration_done = false;
$_SESSION["register"] = false;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $cpasswd = $_POST['confirm_passwd'];
    // $number = $_POST['number'];
    // $email = $_POST['email'];

    // SQL query for Checking Username is Existed
    $checkUser = "SELECT * FROM user_details WHERE username = '$username'";
    $resultUsername = mysqli_query($conn,$checkUser);
    $numOfUserRows = mysqli_num_rows($resultUsername);
    
    // SQL query for Checking Email is Existed
    // $checkEmail = "SELECT * FROM user_details WHERE email = '$email'";
    // $resultEmail = mysqli_query($conn,$checkEmail);
    // $numOfEmailRows = mysqli_num_rows($resultEmail);


    if($numOfUserRows > 0){
        ?>
            <script>alert("Error! Username already exits");</script>
        <?php
    }
    else{
        if($passwd == $cpasswd){
            $query = "INSERT INTO `user_details` (`name`, `username`, `password`, `cpassword`) VALUES ('$name', '$username', '$passwd', '$cpasswd')";

            $result = mysqli_query($conn,$query);

            if($result){
                $_SESSION["register"] = true;
                echo '<script>window.location.href = "login.php";</script>';
                exit;
            }
        }
        else{
            ?>
                <script>alert("Error! Password do not match");</script>
            <?php
        }
    }
    
}

?>


