<?php
session_start();
require ('../includes/_Connect.php');
$title = "Teacher Dashboard";
$links = '<link rel="stylesheet" href="../static/css/student.css"><br>
          <link rel="stylesheet" href="../static/css/main.css"><br>
          <!-- chart script  -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
require ('../includes/_InnerHeader.php');
?>

<!-- Dashboard container is start from here you can see that  -->
<?php
    $img_path = 'student';
    $img_path_file = 'stu-0.png';
    // All dashboards titles 
    $dashboard_title_first = 'Dashboard';  
    $dashboard_title_second = 'Activities';   

        //  All dashboard contents  
    $dashboard_title_first_content = '  <h1 class="h-primary">Your <span class="mark">performance</span> or <span class="mark">
        skill</span> is here, You can see parameter! </h1>
        <div class="container col">
        <div class="student-dashboard-container ">
        <div class="box-skill row">
            <div class="box-img">
                <img src="../static/img/students/08.jpg" alt="skill">
            </div>
            <div class="h-para">
                <h3 class="h-ternary">You completed the workshop Faithfully and get good results </h3>
                <div class="range">
                    <div class="under-range" id="w-50"></div>
                </div>
            </div>
        </div>
        <div class="box-skill row">
            <div class="box-img">
                <img src="../static/img/students/05.jpg" alt="skill">
            </div>
            <div class="h-para">
                <h3 class="h-ternary">You solved the software problems </h3>
                <div class="range">
                    <div class="under-range" id="w-60"></div>
                </div>
            </div>
        </div>
        <div class="box-skill row">
            <div class="box-img">
                <img src="../static/img/students/02.jpg" alt="skill">
            </div>
            <div class="h-para">
                <h3 class="h-ternary">You create the webs </h3>
                <div class="range">
                    <div class="under-range"></div>
                </div>
            </div>
        </div>
        </div>
        </div>';  

        $dashboard_title_second_content = '<h1 class="h-primary">You have votes given by Students,You can <span class="mark">result</span> and grow your performance in the Semesters exams!</h1>
        <!-- your result are here  -->
        <div class="h-primary">
        <canvas id="myChart"></canvas>
        </div>';

    require ('../includes/_UserDashboard.php');
      
    // <!-- Footer container is started  --> 
    $script = ' <!-- all/main scripts  -->
        <script src="../static/js/main.js"></script>
        <!-- chart scripts  -->
        <script>
            const labels = [
                "1st Sem",
                "2nd Sem",
                "3rd Sem",
                "May",
            ];

            const data = {
                labels: labels,
                datasets: [{
                    label: "Your Result SGPA",
                    backgroundColor: "rgb(76, 53, 76)",
                    // backgroundColor: "rgb(255, 99, 132)",
                    borderColor: "rgb(255, 99, 132)",
                    // color:"white",
                    // borderColor: "purple",
                    data: [9.18, 8.90, 8.34, 9.10, 4.50],
                }]
            };

            const config = {
                type: "line",
                data: data,
                options: {}
            };
        </script>
        <script>
            const myChart = new Chart(
                document.getElementById("myChart"),
                config
            );
        </script>';
    require ('../includes/_Footer.php');
?>