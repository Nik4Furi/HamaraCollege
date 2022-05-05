<!-- Departments container start -->
<section class=" cs-container ">
    <!-- computerScience -->
    <div class="cs" id="cs">

        <div class="row">
            <!-- right container for showing the results -->
            <div class="col " id="tab1">
                <h1 class="h-primary">About The department of
                    <?php echo $heading ?>
                </h1>
                <p class="para">The Department of
                    <?php echo $heading ?> at Engineering College Ajmer is
                    known for
                    imparting state of the art education and preparing its students for real world challenges. The
                    initial "
                    <?php echo $department ?>-related" courses were started in August 2000 with the intake of 30
                    students in
                    <?php echo $department ?>Engineering and 30 in Information Technology. Currently the department is
                    having an
                    intake of 90 students in
                    <?php echo $department ?>Engineering and 60 in Information Technology at B. Tech level.
                    We attract the brightest students from the state who score very high ranks in the engineering
                    entrance examinations, for the PG course, department has an intake of 18 students in Computer
                    Engineering, 18 students in Information Technology and 18 students in Software Engineering. At
                    present, the department is having a 17 regular faculty and guest faculty also, whose interests
                    span in almost all areas of
                    <?php echo $department ?>Science.
                    <?php echo $department ?>Science and Engineering department is
                    having 9
                    <?php echo $department ?>Labs and a Central
                    <?php echo $department ?>Center with latest
                    <?php echo $department ?>configuration. Each
                    lab is having capacity of 30
                    <?php echo $department ?>and Center is having capacity of 100 computers. All the
                    <?php echo $department ?>are connected in local area network (wired and wireless) with Internet
                    Connection of
                    1Gbps leased line link and 100 Mbps 1:1 bandwidth. Highly configured servers have been installed
                    department is also having the latest CISCO routers and switches for networking.
                </p>
                <div class="col">
                    <h1 class="h-primary">
                        Vision
                    </h1>
                    <ol class="para-sm">
                        <li>To produce PROFESSIONAL in the field of
                            <?php echo $department ?>science and
                            engineering.
                        </li>
                        <li>To be become the top rank in the INDIA in the any field of
                            engineering </li>
                        <li>To be create the invovative COLLEGE in the india, with use of
                            Fiction Way</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- tab-cotainer  -->
        <div class="tab-container container-fluid">

            <!-- tab-content when the click  -->
            <div id="tab2" class="tabs col ">
                <h1 class="h-primary">Our Faculties in the
                    <?php echo $department ?>
                </h1>

                <div class="cards row ">
                    <div class="card col">
                        <div class="box">
                            <img src="../static/img/departments/<?php echo $img_path?>/fac-1.jpeg" alt="faculty">
                        </div>
                        <div class="col">
                            <h2 class="h-secondry">
                                <?php echo $department_teacher_first ?>
                            </h2>
                            <p class="para-sm">
                                <?php echo $department_teacher_first_intro ?>
                            </p>
                        </div>
                    </div>
                    <div class="card col">
                        <div class="box">
                            <img src="../static/img/departments/<?php echo $img_path?>/fac-2.jpeg" alt="faculty">
                        </div>
                        <div class="col">
                            <h2 class="h-secondry">
                                <?php echo $department_teacher_second ?>
                            </h2>
                            <p class="para-sm">
                                <?php echo $department_teacher_second_intro ?>
                            </p>
                        </div>
                    </div>
                    <div class="card col">
                        <div class="box">
                            <img src="../static/img/departments/<?php echo $img_path?>/fac-3.jpeg" alt="faculty">
                        </div>
                        <div class="col">
                            <h2 class="h-secondry">
                                <?php echo $department_teacher_third ?>
                            </h2>
                            <p class="para-sm">
                                <?php echo $department_teacher_third_intro ?>.
                            </p>
                        </div>
                    </div>
                    <div class="card col">
                        <div class="box">
                            <img src="../static/img/departments/<?php echo $img_path?>/fac-4.jpeg" alt="faculty">
                        </div>
                        <div class="col">
                            <h2 class="h-secondry">
                                <?php echo $department_teacher_fourth ?>
                            </h2>
                            <p class="para-sm">
                                <?php echo $department_teacher_fourth_intro ?>
                            </p>
                        </div>
                    </div>
                    <div class="card col">
                        <div class="box">
                            <img src="../static/img/departments/<?php echo $img_path?>/fac-0.jpeg" alt="faculty">
                        </div>
                        <div class="col">
                            <h2 class="h-secondry">
                                <?php echo $department_teacher_fifth ?>
                            </h2>
                            <p class="para-sm">
                                <?php echo $department_teacher_fifth_intro ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- section for the gallery  -->
    <section class="gallery container">
        <h1 class="h-primary">Our Labs Gallery </h1>

        <div class="full-img" id="full-img-box">
            <img src=".../static/img/cat.jpg" alt="cat" id="full-img">
            <span onclick="closeFullImg()">X</span>
        </div>
        <div class="container" style="width:100%;">
            <img src="../static/img/departments/<?php echo $img_path?>/lab-1.jpeg" alt="cat" class="sm-width"
                onclick="openFullImg(this.src)" class="full-img-w">
            <img src="../static/img/departments/<?php echo $img_path?>/lab-2.jpeg" alt="elephant" class="sm-width"
                onclick="openFullImg(this.src)">
            <img src="../static/img/departments/<?php echo $img_path?>/lab-3.jpeg" alt="hourse" class="sm-width"
                onclick="openFullImg(this.src)">
            <img src="../static/img/departments/<?php echo $img_path?>/lab-4.jpeg" alt="lion" class="sm-width"
                onclick="openFullImg(this.src)">
            <img src="../static/img/departments/<?php echo $img_path?>/lab-0.jpeg" alt="parrot" class="sm-width"
                onclick="openFullImg(this.src)">
        </div>
    </section>

</section>