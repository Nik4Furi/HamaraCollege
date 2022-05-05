<?php
$title = "About";
$links = ' <!-- swiper css -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Fontawesome CDN Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />';
require ('./includes/outerHeader.php');
?>
<?php
    require ('./includes/connect.php');
 ?>


<!-- About container : About us and guidence from the master  -->
<section class="about-container col">
    <h1 class="h-primary">About Us and know about the college</h1>
    <!-- About the guider and mentor  -->
    <div class="row container-fluid about-section ">
        <div class="left">
            <div class="img">
                <img src="./static/img/about/hod.jpeg" alt="hod of Department" style="width:100%;">
            </div>
        </div>
        <div class="right col" style="margin: 7px 5px;">
            <h2 class="h-secondry">
                Our <span class="mark">Mentor</span> and <span class="mark">hod</span> of ComputerScience Department
            </h2>
            <p class="para">Hello Everyone, we know that <span class="mark">only a jeweler can find diamonds.</span>So we are the diamonds and our mentor(<span class="mark">Jyoti Gajrani</span>) is a jeweler , she is encourge or guide  our teem to find the better way to create this website or mangament system.</p>
            <p class="para">She is phd in the computer science from the IIT Jodhpur and she is very honest with her work, she is also motivate and guide  the students about their career</p>
            
        </div>
    </div>

    <!-- About the developers  -->
    <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper ">
            <!-- <h2 class="h-secondry">Intro of the Developers</h2> -->
            <div class="swiper-wrapper">
                <div class="swiper-slide row container-fluid" style="width: 100%;">
                    <!-- <div class=" card  col media-w" style="width: 50%;"> -->
                    <div class=" card  col media-w" style="">
                        <div class="box" style="width: 55%;border: none; ">
                            <img src="./static/img/about/dev-0.jpeg" alt="developer"
                                style="border-radius:50%;width: 35%;">
                        </div>
                        <div class="h-para col">
                            <h2 class="h-secondry">Rajkumar bhalot</h2>
                            <h3 class="h-ternary">B.tech 2 <sup>nd</sup>Year, Computer Science</h3>
                            <p class="para">He is work as a <span class="mark"> manager </span>of the website , who is
                                manage the web from the scartch</p>
                            <p class="para-sm">His another work is find the best way to mange any time that webs          </p>
                        </div>
                    </div>
                    <div class=" card  col media-w" >
                        <div class="box" style="width: 55%;border: none;">
                            <img src="./static/img/about/dev-2.png" class="w-100" alt="developer"
                                style="border-radius:50%; height:135px;">
                        </div>
                        <div class="h-para col">
                            <h2 class="h-secondry">Nabin Panday</h2>
                            <h3 class="h-ternary">B.tech 2 <sup>nd</sup>Year, Computer Science</h3>
                            <p class="para">He is work as a <span class="mark">Team Leader</span> who is manage the web and Execute any plan.</p>
                            <p class="para-sm">He  is work properly and complete the whole website.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide row container-fluid" style="width: 100%;">
                    <div class=" card  col media-w" >
                        <div class="box" style="width: 45%;border: none;">
                            <img src="./static/img/about/dev-1.png" class="w-100" alt="developer"
                                style="border-radius:50%; height:129px;">
                        </div>
                        <div class="h-para col">
                            <h2 class="h-secondry">Mahendra Singh Rawat</h2>
                            <h3 class="h-ternary">B.tech 2 <sup>nd</sup>Year, Computer Science</h3>
                            <p class="para">He is <span class="mark">Designer</span> and Constructor of the website </p>
                            <p class="para-sm">His work as motivator and guider because of motivate us everytime about this web.
                            </p>
                        </div>
                    </div>
                    <div class="card col media-w">
                        <div class="box" style="width: 45%;border: none;">
                            <img src="./static/img/about/dev-3.png" class="w-100" alt="developer"
                                style="border-radius:50%;">
                        </div>
                        <div class="h-para col">
                            <h2 class="h-secondry">Nikhil Gurjar</h2>
                            <h3 class="h-ternary">B.tech 2 <sup>nd</sup>Year, Computer Science</h3>
                            <p class="para">His role not big , he is work as the clerk from the development time.</p>
                            <p class="para-sm">He is just like a helper for help some small works just as take water, take tea etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination" style="bottom:1px;"></div>
        </div>
    </div>

    <!-- contact us developers  -->
    <div class="contact-container col">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Engineering College Ajmer</div>
                    <div class="text-two">
                        <p1>NH-8, Barliya Circle</p1>
                    </div>
                    <div class="text-two">
                        <p2>Ajmer, Rajasthan 305025</p2>
                    </div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+91 7300330650</div>
                    <div class="text-two">
                        <p1>+91 9680155083</p1>
                    </div>
                    <div class="text-two">
                        <p2>+91 6567286660</p2>
                    </div>
                    <div class="text-two">
                        <p3>+91 6378249494</p3>
                    </div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">nabinpandey123@gmail.com</div>
                    <div class="text-two">
                        <p1>mahendra123@gmail.com</p1>
                    </div>
                    <div class="text-two">
                        <P2>nikhil123@gmail.com</P2>
                    </div>
                    <div class="text-two">
                        <p3>rajkumarbalot228@gmail.com</p3>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">
                    <h1 class="h-primary">Contact With Devs</h1>
                </div>
                <p class="para">If you have any work from our team or any types of quries related to our website, you
                    can send us
                    message from here. It's our pleasure to help you.</p>
                <form  method="post">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <input type="phone" name="phone" placeholder="Enter your phoneNo." required>
                    </div>
                    <div class="input-box message-box">
                        <textarea name="msg" placeholder="Enter your concern" required></textarea>
                    </div>
                    <div class="input-box">
                        <button class="btn" type="submit" value="Send Now" name="submit">Send Feedback</button>
                    </div>
                </form>
  <?php                  
        
    // submit the feedback form 
    if(isset($_POST['submit'])){
        //Variables declarations
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $msg = $_POST['msg'];
       //Queries
        $sql ="insert into customer values('$name','$email','$phone','$msg')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>alert('Thank you, Your feedback submitted')</script>";
            ?>
              <meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/about.php"/>
             <?php
        }
        
        else  {
            echo "<script>alert('Oops, Your feedback doesnot send')</script>";
            ?>
              <meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/about.php"/>
             <?php
            // error_log( "Error. ".mysqli_connect_error);
            // error_log( "Error. ".mysqli_connect_errno($conn,$sql));
        }
    }
    mysqli_close($conn);
?>
            </div>
        </div>
    </div>
</section>
<!-- Submitting the feedback form  -->


<?php
$script = '<!-- swiper js  -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>';
require ('./includes/footer.php');
?>