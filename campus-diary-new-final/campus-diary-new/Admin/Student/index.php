<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        .student-main{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5vh;
        }

        .student-main h1 {
            font-size: 3em;
        }

        table{
            font-size: 18px;
        }

        th{
            padding: 5px 0px;
        }

        td{
            text-align: center;
            padding: 5px 0px;
        }

        tr td:nth-child(2) {
            color: blue;
        }
    </style>
</head>
<body>
    <?php include '../nav.php'; ?>
    <div class="student-main temp">
        <h1>Student List</h1>
        <?php 
            include '../partials/db/db_connect.php';
            $sql = "SELECT * FROM `user_details`" ;
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);

            if($num > 0){
                echo "<table border = '1'>";
                    echo "<tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Number</th>
                        <th>E-mail</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td  width = '200'>".$row['name']."</td>
                        <td width = '200'>".$row['username']."</td>
                        <td width = '200'>".$row['number']."</td>
                        <td width = '400'>".$row['email']."</td></tr>";
                    }
                echo "</table>";
            }
        ?>
    </div>
</body>
</html>