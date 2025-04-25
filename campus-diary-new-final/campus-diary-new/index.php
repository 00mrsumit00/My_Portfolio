<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our website</title>
    <?php include('partials/links/links.php'); ?>
</head>

<body>
    <!-- NavBar -->
    <nav class="nav">
        <img id="img1" src="images/cam-removebg.png" alt="education" />
        <img id="img2" width="80" height="80" src="https://img.icons8.com/dotty/80/education.png" alt="Campus Diary" />
        <!-- <h2>Logo</h2> -->
        <div class="nav-main" id="navbar">
            <a href="#home" id="#home" class="nav-link">Home</a>
            <a href="#courses" id="#courses" class="nav-link">Courses</a>
            <a href="#about" id="#about" class="nav-link">About Us</a>
            <a href="#contact" id="#contact" class="nav-link">Contact</a>
            <button class="btn-1" id="sign-in-btn">Sign In</button>
            <i class="ri-menu-fold-line" id="drop-btn"></i>
            <i class="ri-close-fill" id="close-btn"></i>
        </div>
    </nav>
    <div class="drop-down" hidden>
        <a href="#home">Home</a>
        <a href="#courses">Courses</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
    </div>


    <!--  Home section -->
    <section id="home">
        <div class="main temp">
            <div class="content">
                <div class="left">
                    <h1>Join <span>Campus Diary</span> to learn coolest coding skills for your career.</h1>
                    <p>"Decoding the language of possibilities, coding is where creativity meets precision, turning
                        ideas into digital realities."</p>
                    <button class="btn-2" id="exp-btn">Explore More<i class="ri-arrow-right-line"></i></button>
                </div>
                <div class="right">
                    <img src="images/boy.png">
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="line"></div> -->

    <!-- Courses Section  -->
    <section id="courses">
        <div class="second-body temp">

            <div class="card-container">
                <div class="cards" id="card1">
                    <div class="text">Learn Web Development : </div>
                    <span><b>HTML</b></span>
                    <img src="images/img-for-html.jpg" alt="">
                    <button class="btn-learn" id="btn-learn1"><a href="#">Learn More</a></button>
                </div>
                <div class="cards" id="card2">
                    <div class="text">Learn Web Development : </div>
                    <span><b>CSS</b></span>
                    <img src="images/img-for-css.png" alt="">
                    <button class="btn-learn" id="btn-learn2"><a href="#">Learn More</a></button>
                </div>
                <div class="cards" id="card3">
                    <div class="text">Learn Web Development : </div>
                    <span><b>JavaScript</b></span>
                    <img src="images/img-for-js.avif" alt="">
                    <button class="btn-learn" id="btn-learn3"><a href="#">Learn More</a></button>
                </div>
                <div class="cards" id="card4">
                    <div class="text">Learn <b>Java</b> Development : </div>
                    <span><b>Java</b></span>
                    <img src="images/img-for-java.jpeg" alt="">
                    <button class="btn-learn" id="btn-learn4"><a href="#">Learn More</a></button>
                </div>
                <div class="cards" id="card5">
                    <div class="text">Learn <b>Python</b> Development : </div>
                    <span><b>Python</b></span>
                    <img src="images/img-for-python.png" alt="">
                    <button class="btn-learn" id="btn-learn5"><a href="#">Learn More</a></button>
                </div>
                <div class="cards" id="card6">
                    <div class="text">Learn Web Development : </div>
                    <span><b>PHP</b></span>
                    <img src="images/img-for-php.webp" alt="">
                    <button class="btn-learn" id="btn-learn6"><a href="#">Learn More</a></button>
                </div>

            </div>

        </div>
    </section>

    <!-- About section  -->
    <section id="about">
        <div class="fifth-body temp">
            <div class="avi">
                <div class="left">
                    <div class="left-top">
                        <p>Hi, I'm</p>
                        <a href="#about">
                            <p>Avinash Vange</p>
                        </a>
                        <p>Web Developer</p>
                    </div>
                    <div class="left-middle">

                        <!-- Instagram Logo  -->
                        <a href="https://www.instagram.com/vange_avinash/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                id="instagram">
                                <path
                                    d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z">
                                </path>
                            </svg>
                        </a>

                        <!-- Facebook logo  -->
                        <a href="https://www.facebook.com/avinash.vange.5" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook">
                                <path
                                    d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h6v-5.5H6V8h2V6a3 3 0 0 1 3-3h2v2.5h-1c-.552 0-1-.052-1 .5v2h2.5l-1 2.5H11V16h3c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z">
                                </path>
                            </svg>
                        </a>

                        <!-- LinkedIn Logo  -->
                        <a href="https://www.linkedin.com/in/avinash-vange-677bb3252?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="linkedin">
                                <path
                                    d="M21.06 18.59zm0 0zm-.06.04zM31.93 6H8.07A2 2 0 0 0 6 8v24a2 2 0 0 0 2.07 2h23.86A2 2 0 0 0 34 32V8a2 2 0 0 0-2.07-2zM14.49 29.44h-4.23V16.79h4.23zm-2.12-14.37A2.18 2.18 0 0 1 10 12.89a2.21 2.21 0 0 1 2.4-2.19 2.19 2.19 0 1 1 0 4.37zm17.37 14.37h-4.23v-6.77c0-1.7-.61-2.85-2.14-2.85a2.31 2.31 0 0 0-2.17 1.53 2.92 2.92 0 0 0-.14 1v7.06h-4.23s.05-11.46 0-12.65h4.23v1.8a4.19 4.19 0 0 1 3.81-2.09c2.78 0 4.87 1.81 4.87 5.69zm-8.68-10.85zm0 0zm0 0zm0 0z">
                                </path>
                            </svg>
                        </a>

                        <!-- WhatsApp Logo  -->
                        <a href="https://wa.me/917420059805" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" id="whatsapp">
                                <path
                                    d="M16.6 14c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.2-.5-.5-1-1.1-1.4-1.7-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.3.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.3-.8-1.8-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3-.6.6-.9 1.3-.9 2.1.1.9.4 1.8 1 2.6 1.1 1.6 2.5 2.9 4.2 3.7.5.2.9.4 1.4.5.5.2 1 .2 1.6.1.7-.1 1.3-.6 1.7-1.2.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2 5.5 0 9.9-4.4 9.9-9.9.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3-1.5 0-2.9-.4-4.2-1.1l-.3-.2-3.1.8.8-3-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="left-bottom">
                        <a href="personal-website\index.html" target="_blank">
                            <button class="Portfolio-btn">
                                <span>My Portfolio</span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64"
                                    viewBox="0 0 64 64" id="arrow">
                                    <g transform="translate(28 328)">
                                        <path fill="#134563"
                                            d="M4-272.1c-13.2 0-23.9-10.7-23.9-23.9S-9.2-319.9 4-319.9s23.9 10.7 23.9 23.9S17.2-272.1 4-272.1zm0-45.2c-11.7 0-21.3 9.6-21.3 21.3s9.6 21.3 21.3 21.3 21.3-9.6 21.3-21.3-9.6-21.3-21.3-21.3z">
                                        </path>
                                        <path fill="#134563"
                                            d="m3.5-282.3-1.8-1.9L13.4-296 1.7-307.8l1.8-1.9L17.2-296 3.5-282.3"></path>
                                        <path fill="#134563" d="M15.3-294.6h-24v-2.8h24z"></path>
                                    </g>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="right">
                    <div class="img-box">
                        <img class="pattern" src="images/pattern.png" alt="Avinash Vange">
                        <img class="avi-img" src="images/my_img.png" alt="Avinash Vange">
                        <div class="shape"></div>
                    </div>
                </div>
            </div>
            <div class="sep"></div>
            <div class="sumit">
                <div class="left">
                    <div class="img-box">
                        <img class="pattern" src="images/pattern.png" alt="Sumit">
                        <img class="sumit-img" src="images/sumit_img.jpg" alt="Sumit">
                        <div class="shape"></div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-top">

                        <p>Hi, I'm</p>
                        <a href="#about">
                            <p>Sumit Tupsundare</p>
                        </a>
                        <p>Web Developer</p>
                    </div>
                    <div class="right-middle">

                        <!-- Instagram Logo  -->
                        <a href="https://www.instagram.com/vange_avinash/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                id="instagram">
                                <path
                                    d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z">
                                </path>
                            </svg>
                        </a>

                        <!-- Facebook logo  -->
                        <a href="https://www.facebook.com/avinash.vange.5" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook">
                                <path
                                    d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h6v-5.5H6V8h2V6a3 3 0 0 1 3-3h2v2.5h-1c-.552 0-1-.052-1 .5v2h2.5l-1 2.5H11V16h3c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z">
                                </path>
                            </svg>
                        </a>

                        <!-- LinkedIn Logo  -->
                        <a href="https://www.linkedin.com/in/avinash-vange-677bb3252?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="linkedin">
                                <path
                                    d="M21.06 18.59zm0 0zm-.06.04zM31.93 6H8.07A2 2 0 0 0 6 8v24a2 2 0 0 0 2.07 2h23.86A2 2 0 0 0 34 32V8a2 2 0 0 0-2.07-2zM14.49 29.44h-4.23V16.79h4.23zm-2.12-14.37A2.18 2.18 0 0 1 10 12.89a2.21 2.21 0 0 1 2.4-2.19 2.19 2.19 0 1 1 0 4.37zm17.37 14.37h-4.23v-6.77c0-1.7-.61-2.85-2.14-2.85a2.31 2.31 0 0 0-2.17 1.53 2.92 2.92 0 0 0-.14 1v7.06h-4.23s.05-11.46 0-12.65h4.23v1.8a4.19 4.19 0 0 1 3.81-2.09c2.78 0 4.87 1.81 4.87 5.69zm-8.68-10.85zm0 0zm0 0zm0 0z">
                                </path>
                            </svg>
                        </a>

                        <!-- WhatsApp Logo  -->
                        <a href="https://wa.me/917420059805" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                viewBox="0 0 24 24" id="whatsapp">
                                <path
                                    d="M16.6 14c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1-.2.2-.6.8-.8 1-.1.2-.3.2-.5.1-.7-.3-1.4-.7-2-1.2-.5-.5-1-1.1-1.4-1.7-.1-.2 0-.4.1-.5.1-.1.2-.3.4-.4.1-.1.2-.3.2-.4.1-.1.1-.3 0-.4-.1-.1-.6-1.3-.8-1.8-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3-.6.6-.9 1.3-.9 2.1.1.9.4 1.8 1 2.6 1.1 1.6 2.5 2.9 4.2 3.7.5.2.9.4 1.4.5.5.2 1 .2 1.6.1.7-.1 1.3-.6 1.7-1.2.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2 5.5 0 9.9-4.4 9.9-9.9.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3-1.5 0-2.9-.4-4.2-1.1l-.3-.2-3.1.8.8-3-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="right-bottom">
                        <a href="#">
                            <button class="Portfolio-btn">
                                <span>My Portfolio</span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64"
                                    viewBox="0 0 64 64" id="arrow">
                                    <g transform="translate(28 328)">
                                        <path fill="#134563"
                                            d="M4-272.1c-13.2 0-23.9-10.7-23.9-23.9S-9.2-319.9 4-319.9s23.9 10.7 23.9 23.9S17.2-272.1 4-272.1zm0-45.2c-11.7 0-21.3 9.6-21.3 21.3s9.6 21.3 21.3 21.3 21.3-9.6 21.3-21.3-9.6-21.3-21.3-21.3z">
                                        </path>
                                        <path fill="#134563"
                                            d="m3.5-282.3-1.8-1.9L13.4-296 1.7-307.8l1.8-1.9L17.2-296 3.5-282.3"></path>
                                        <path fill="#134563" d="M15.3-294.6h-24v-2.8h24z"></path>
                                    </g>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact section  -->
    <section id="contact">
        <div class="fourth-body temp">
            <div class="content">
                <div class="left">
                    <img src="images/Coding@2x.png" alt="Coding">
                </div>
                <div class="right">
                    <h1>Contact Us</h1>
                    <form action="partials\DB\store_contact_data.php" method="post" class="cont-form">
                        <input type="text" name="name" class="inp" placeholder="Name">
                        <div class="cont-for-email-and-sub">
                            <input type="email" name="email" id="dif-inp" class="inp" placeholder="E-mail">
                            <input type="text" name="subject" id="dif-inp" class="inp" placeholder="Subject">
                        </div>
                        <input type="text" name="desc" class="inp" placeholder="Description">
                        <button type="submit" class="btn"> <span>Send</span> <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" id="paper-plane">
                                <g data-name="Paper plane">
                                    <polygon fill="#d3ebe4" stroke="#231f20" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="15"
                                        points="484.76 8.5 161.45 339.03 161.3 339.03 9.24 287.81 484.76 8.5"></polygon>
                                    <polygon fill="#d3ebe4" stroke="#231f20" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="15"
                                        points="484.76 8.5 492.13 450.56 300.09 385.77 235.03 363.84 484.76 8.5">
                                    </polygon>
                                    <polygon fill="#454b80"
                                        points="484.76 8.5 235.03 363.84 209.06 503.5 161.45 339.17 161.45 339.03 484.76 8.5">
                                    </polygon>
                                    <polygon fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="15"
                                        points="484.76 8.5 235.03 363.84 209.06 503.5 161.45 339.17 161.45 339.03 484.76 8.5">
                                    </polygon>
                                    <line x1="161.45" x2="161.3" y1="339.03" y2="339.03" fill="none" stroke="#231f20"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="15"></line>
                                    <polygon fill="#454b80"
                                        points="300.09 385.77 209.06 503.5 235.03 363.84 300.09 385.77">
                                    </polygon>
                                    <polygon fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="15"
                                        points="235.03 363.84 209.06 503.5 300.09 385.77 235.03 363.84">
                                    </polygon>
                                </g>
                            </svg> </button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------------JavaScript------------- -->
    <script src="partials\JS\script.js"></script>



</body>

</html>