<?php
    require ('./includes/_Connect.php');
    $title = "HamaraCollege";
    $links = "";
    require ('./includes/_OuterHeader.php');
?>

<!-- Starting the Home Page To Elaborate the Info about the "HamaraCollege"-->
<main>
    <!-- Library img is here  -->
    <div class="img-box" style="width: 100%;">
        <img src="./static/img/home/banner.jpg" alt="" style=" width: 100%;">
    </div>
    <!-- Events are listend to right to left  -->
    <div class="para">
        <marquee behavior="smooth" direction="left" style="color: black;">
            Hostel Facility available for Girls Students inside the Co-ed ECA Campus<br> <br>
            Students are required to visit their department page, examination page, proctor page regularly for updates
        </marquee>
    </div>

    <!-- containing the knowledge about the cards  -->
    <div class="col" style="margin: 0; width: 100%;">
        <h1 class="h-primary">Read some about the college</h1>

        <div class="cards row">
            <div class=" card sport-card col" style="">
                <div class="box">
                    <img src="./static/img/home/tech-1.jpeg" alt="facilites">
                </div>
                <div class="h-para col">
                    <h3 class="h-ternary">Cyber Security Club</h3>
                    <p class="para-sm">The protection of computer systems and networks from information disclosure,
                        theft of or damage to their hardware, software, or electronic data, as well as from the
                        disruption or misdirection of the services they provide.</p>
                </div>
            </div>
            <div class="card  col " style=" ">
                <div class="box">
                    <img src="./static/img/sport/sport-1.jpeg" alt="sports" width="100%">
                </div>
                <div class="h-para col">
                    <h3 class="h-ternary">The kabaddi court is not less than a temple for my team. ...</h3>
                    <p class="para-sm"> Half of a court, touch out as many of their defenders as possible, and return to
                        their own half of the court, all without being tackled by the defenders, and in a single breath.
                    </p>
                </div>

            </div>
            <div class="card col1 " style=" ">
                <div class="col2">News</div>
                <div class="col">
                    <div class="col3 col">
                        <marquee behavior="scroll" direction="up">
                            <p class="para-sm">1.Whose studnets want the room nearest college , because of college
                                faculiies are creating the hostels near the collleg .<br><br>
                                2. Your exam of the odd semester are starting from the may, good luck all of us , take
                                good chance to blow your mark sheet<br><br>
                                3. The online game hunting compititon is starting from month of june
                                anyone want to join , plz registration ownself <br><br>
                            </p>
                        </marquee>
                    </div>
                </div>
            </div>
            <div class=" card col1" style=" ">
                <div class="col2">Quick links</div>
                <div class="col">
                    <div class="col3 col">
                        <p class="para-sm">1. See the <a href="./pgprogrames.php" style="color: pink;">pgprogrames</a>
                            for all knowledge about them. </p><br>
                        <p class="para-sm">2. See the <a href="./ugprogrames.php" style="color: pink;">ugprogrames</a>
                            for all knowledge about
                            them.
                        </p><br>
                        <p class="para-sm">3. See the <a href="./facilities.php" style="color: pink;">facilites</a> for
                            all knowledge about them.
                        </p><br>
                        <p class="para-sm">4. See the <a href="./departments/computer.php" style="color: pink;">computer
                                science
                                department</a> for all knowledge about them.
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
$script = "";
require ('./includes/_Footer.php');
?>