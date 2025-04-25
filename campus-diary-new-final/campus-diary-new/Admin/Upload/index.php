<?php
include '../partials/db/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $unit_no = $_POST['unit_no'];
    $sem_name = $_POST['sem_name'];
    
    if (isset($_FILES["pdf_file"]) && $_FILES["pdf_file"]["error"] == 0) {

        $pdf_content = file_get_contents($_FILES["pdf_file"]["tmp_name"]);
        
        $sql = "INSERT INTO notes (subject_code, subject_name, unit_no, sem_name, pdf_content) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ssiss", $sub_code, $sub_name, $unit_no, $sem_name, $pdf_content);
        
        
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notes </title>
    <style>

        body{
            overflow: hidden;

        }

        .upload-main {
            margin-top: 50px;
            width: 100vw;
            height: 75vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5vh;
        }

        form {
            border: 2px solid blue;
            display: flex;
            flex-direction: column;
            gap: 5vh;
            border-radius: 5px;
            padding: 40px;
            background-color: rgb(238, 236, 236);
        }
        
        .first-row {
            display: flex;
            flex-direction: column;
            gap: 2vh;
        }
        
        .first-row select,label {
            height: 5vh;
            width: 15vw;
            font-size: 1em;
        }

        input {
            height: 5vh;
            width: 15vw;
            padding-left: 10px;
        }

        input[type='file'] {
            width: 50%;
            font-size: 16px;
        }

        input::placeholder {
            font-size: 1.2em;
        }

        .second-row {
            display: flex;
            width: 36vw;
            justify-content: space-between;
            gap: 2vw;
        }
        
        .third-row {
            display: flex;
            justify-content: space-around;
            gap: 5vw;
        }

        .btn {
            font-size: 1.5em;
            height: 6vh;
            color: white;
            background-color: rgb(89, 89, 202);
        }

        .btn:hover {
            background-color: rgb(47, 47, 219);
        }


    </style>
</head>

<body>
   <?php  include'../nav.php';   ?>
    <div class="upload-main temp">
        <h1>Upload Notes</h1>
        <div class="upload-form">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="first-row">
                    <label for="sem-name">Choose Semester name in words</label>
                    <select name="sem_name" id="sem-name">
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                        <option value="Third Semester">Third Semester</option>
                        <option value="Forth Semester">Forth Semester</option>
                        <option value="Fifth Semester">Fifth Semester</option>
                        <option value="Sixth Semester">Sixth Semester</option>
                    </select>
                </div>
                <div class="second-row">
                    <input type="text" name="sub_code" placeholder="Subject Code">
                    <input type="text" name="sub_name" placeholder="Subject Name">
                </div>
                <div class="third-row">
                    <input type="text" name="unit_no" placeholder="Unit No">
                    <input type="file" name="pdf_file" accept=".pdf" multiple="false">
                </div>
                <button type="submit" class="btn">Upload</button>
            </form>
        </div>
    </div>
</body>

</html>