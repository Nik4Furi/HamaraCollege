<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamara College
        <?php echo $title;?>
    </title>
    <link rel="shortcut icon" href="../static/img/home/logo.png" type="image/x-icon">
    <!-- css links container  -->
    <link rel="stylesheet" href="../static/css/utiles.css">
    <link rel="stylesheet" href="../static/css/nav.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/media.css">
    <?php
     echo $links."<br>";
     
    ?>

</head>

<body>
    <!-- Header container started here logo and media links  -->
    <header>
        <div>
            <a href="../index.php">
                <img src="../static/img/home/logo.png" alt="logo" width="100%" height="95px"
                    style="    cursor: pointer;">
            </a>
        </div>
        <div id="div1">
            <div>
                <a href="https://www.facebook.com" target="_blank"><img src="../static/img/home/facebook.png"
                        height="30px"></a>
            </div>
            <div>
                <a href="tomail:gmail@email.com" target="_blank"><img src="../static/img/home/mail.png"
                        height="30px"></a>
            </div>
            <div>
                <a href="https://in.linkedin.com/" target="_blank"><img src="../static/img/home/linkedin.jpg"
                        height="30px"></a>
            </div>
            <div>
                <a href="https://twitter.com/twitter/" target="_blank"><img src="../static/img/home/twitter.png"
                        height="30px"></a>
            </div>
            <div>
                <a href="https://www.instagram.com/?hl=en" target="_blank"><img src="../static/img/home/insta.png"
                        height="30px"></a>
            </div>./
        </div>
    </header>
    <!-- Navbar started here all navlinks  -->
    <nav id="nav">
        <ul id="navlist">
            <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="../about.php"><i class="fa-solid fa-house"></i>About Us</a>

            </li>
            <li><a href="#tab-1">Academic</a>
                <nav class="drop-down" id="tab-1">
                    <ul>
                   
                        <li>
                            <a href="../syllabus.php">Syllabus</a>
                        </li>

                        <li>
                            <a href="../pgprogrames.php">PG programes</a>
                        </li>
                        <li>
                            <a href="../ugprogrames.php">UG programes</a>
                        </li>


                    </ul>
                </nav>
            </li>

            <li><a href="#tab-2">Accounts</a>
                <nav class="drop-down" id="tab-2">
                    <ul>
                        <li>
                            <a href="../student/index.php">Student</a>
                        </li>
                        <li>
                            <a href="../parent/index.php">Parents</a>
                        </li>
                        <li>
                            <a href="../teacher/index.php">Teacher</a>
                        </li>
                        <li>
                            <a href="../admin/index.php">Admin</a>
                        </li>
                    </ul>
                </nav>
            </li>

            <li><a href="#tab-3">Department</a>
                <nav class="drop-down" id="tab-3">
                    <ul>
                        <li>
                            <a href="../departments/civil.php">Civil Engineering</a>
                        </li>
                        <li>
                            <a href="../departments/computer.php">Computer Science and Engineering</a>
                        </li>


                        <li>
                            <a href="../departments/electrical.php">Electrical Engineering</a>
                        </li>
                        <li>
                            <a href="../departments/mahecnical.php">Mechanical Engineering</a>
                        </li>
                    </ul>
                </nav>
            </li>


            <li><a href="../facilities.php">Facilites</a></li>

        </ul>
        <!-- ham burger for styling  -->
        <div class="burger">  
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

       
    </nav>