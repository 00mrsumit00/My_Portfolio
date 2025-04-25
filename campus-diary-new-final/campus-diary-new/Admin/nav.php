<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../../partials/links/links.html') ?>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100vw;
            background-color: white;
            scroll-behavior: smooth;
        }

        .main {
            height: fit-content;
            width: 100vw;
            background-color: #fff;
            position: relative;
        }

        .nav {
            height: 60px;
            width: 100%;
            border-bottom: 2px solid #dadada;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0% 5vw;
            position: fixed;
            top: 0;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .nav-main {
            /* background-color: blue; */
            display: flex;
            align-items: center;
            gap: 4vw;
        }

        .nav img {
            width: 6vw;
            height: 5vw;
        }

        .nav #img2 {
            display: none;
        }

        .nav-main a {
            font-size: 1.3vw;
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .activeSection {
            background-color: white;
        }

        .nav-main .btn-1 {
            font-size: 1.2vw;
            padding: 1vw 2vw;
            background-color: #FF735C;
            color: white;
            font-weight: 600;
            width: 10vw;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            cursor: pointer;
        }

        .nav i {

            display: none;

        }

        .drop-down {
            display: flex;
            flex-direction: column;
            position: fixed;
            z-index: 1;
            right: -110%;
            transition: right 0.5s ease;
            top: 60px;
            width: 100vw;
            background-color: white;
            padding: 5vw 10vw;
            align-items: end;
            gap: 10px;
        }

        .show {
            right: 0;
        }


        .drop-down a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: black;
            border-bottom: 0.5px solid black;
            padding-bottom: 8px;
        }

        .temp {
            padding-top: 60px;
        }


        /* <----------------------- Media Queries -------------------> */

        @media (max-width:600px) {
            .nav {
                background-color: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(10px);
                color: black;
                padding: 0 5vw;
            }

            .nav h2 {
                font-size: 6vw;
            }

            .nav-main a {
                text-decoration: none;
                font-size: 3vw;
                display: none;
            }

            .nav i {
                display: contents;
                font-size: 8vw;
                font-weight: 100;
                color: black;

            }

            .nav #close-btn {
                display: none;
            }

            .nav-main .btn-1 {
                display: none;
            }

            .main .content {
                display: flex;
                flex-direction: column;
                gap: 5vh;
            }

            .main .content .left {
                margin-top: 2vh;
                margin-left: 2vw;
                height: 100%;
                width: 98%;
                padding: 7vw 5vw 0 5vw;
            }

            .main .content .left h1 {
                font-size: 10vw;
            }

            .main .content .left p {
                margin-top: 8vw;
                font-size: 5.5vw;
                font-weight: 500;
                width: 100%;
                color: black;
            }

            .main .content .left button {
                width: 50vw;
                height: 15vw;
                margin-top: 10vw;
                font-size: 6vw;
                padding: 1vw 1vw;
                background-color: #FF735C;
                color: white;
                font-weight: 500;
                border: none;
                border-radius: 5px;
            }

            .main .content .right {
                margin-top: 5vh;
                height: 100%;
                width: 100%;
            }

            .main .content .right img {
                width: 100vw;
                height: fit-content;
            }

            .nav img {
                display: none;
            }

            .nav #img2 {
                display: block;
                height: 10vw;
                width: 10vw;

            }

            .activeSection {
                color: white;
            }
        }
    </style>
</head>

<body>
    <!-- NavBar -->
    <nav class="nav">
        <img id="img1" src="../../images/cam-removebg.png" alt="education" />
        <img id="img2" width="80" height="80" src="https://img.icons8.com/dotty/80/education.png" alt="Campus Diary" />
        <!-- <h2>Logo</h2> -->
        <div class="nav-main" id="section-list">
            <a href="../student/index.php">Users</a>
            <a href="../upload/index.php">Upload</a>
            <a href="../partials/sessions/logout.php"><button class="btn-1">Log Out</button></a>
            <i class="ri-menu-fold-line" id="drop-btn"></i>
            <i class="ri-close-fill" id="close-btn"></i>
        </div>
    </nav>
    <div class="drop-down" hidden>
        <a href="#">Users</a>
        <a href="#">Upload</a>
        <a href="#">Log Out</a>
    </div>

    <script>
        let drop_btn = document.getElementById("drop-btn")
        let drop_down = document.querySelector(".drop-down")
        let close_btn = document.getElementById("close-btn")

        drop_btn.addEventListener("click", () => {
            drop_down.style.hidden = "false"
            drop_down.classList.toggle("show");
            drop_btn.style.display = "none"
            close_btn.style.display = "block"
        })

        close_btn.addEventListener("click", () => {
            drop_btn.style.display = "block"
            close_btn.style.display = "none"
        })

        window.addEventListener("click", function (event) {
            if (!event.target.matches("#drop-btn")) {
                if (drop_down.classList.contains("show")) {
                    drop_down.classList.remove("show");
                }
            }
        })


        // Script to make a section activeSection

        document.addEventListener("DOMContentLoaded", function () {
            var currentUrl = window.location.href;

            // Get all anchor tags inside the nav
            var navLinks = document.querySelectorAll(".nav-main a");

            // Loop through each link and check if its href matches the current URL
            navLinks.forEach(function (link) {
                if (link.href === currentUrl) {
                    // Add the 'active' class to the parent <li> element
                    link.classList.add("activeSection");
                }
            });
        });

    </script>
</body>

</html>