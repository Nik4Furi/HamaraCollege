<!-- studetn deatils containing from here  -->
<section class="student-cotainer  ">
    <div class="banner">
        <div class="banner-left">
            <h1 class="h-primary"><span class="mark">
                  Welcome Guy in your dashboard 
                </span> </h1>
        </div>
        <!-- <div class="banner-right">
            <div class="circle-img" style="width: 30%;">
                <img src="../static/img/<?php echo $img_path?>/<?php echo $img_path_file ?>" alt="student"
                    style="width: 100%; border-radius: 50%; border: 1px solid purple;">
            </div>
        </div> -->
    </div>

    <!-- student section started here  --> 
    <div class="student-section row">
        <div class="left">
            <div class="dashboard col">
                <ul class="dashboard-list tabs">
                    <div class="border-shap">
                        <li class="tab is-active"><a data-switcher data-tab="1">
                                <?php echo $dashboard_title_first ?>
                            </a></li>
                    </div>
                    <div class="border-shap">
                        <li class="tab"><a data-switcher data-tab="2">
                                <?php echo $dashboard_title_second ?>
                            </a></li>
                    </div>

                </ul>
            </div>
        </div>

        <!-- All the swichtable content are here  -->
        <div class="right pages">
            <!-- dashboard all containing properties -->
            <div class="page is-active col" data-page="1">
                <?php echo $dashboard_title_first_content;   ?>
            </div>

            <!-- All activites are here  -->
            <div class="page col" data-page="2">
                <?php echo $dashboard_title_second_content;   ?>
            </div>
        </div>

    </div>
</section>