<?php
    require ('../includes/_Connect.php');
    $title = "Department of Machenical Engineering";
    $links = '<link rel="stylesheet" href="../static/css/department.css"><br>
              <link rel="stylesheet" href="../static/css/gallery.css">';
    require ('../includes/_InnerHeader.php');
?>
    
<!-- departments of the computer Science -->
<?php
    $heading = "Machenical Engineering";
    $department = "Machenical Engineering";
    $img_path = "machnical";

    //teachers details
    $department_teacher_first = "Dr. Sita Devi";
    $department_teacher_first_intro = "Hello everyone , I am a teacher of your
    branch of machnical engineering . I shall teach about the Manufacturing.I am post graduate from the IIT Kanpur in 2019 in subject of Manufacturing Engineering.";

    $department_teacher_second = "Ms. Alter";
    $department_teacher_second_intro = "Hello everyone , I am a teacher of your
    branch of machnical engineering . I shall teach about the Mechanics.I am post graduate from the IIT Kanpur in 2019 in subject of Mechanics Engineering.";

    $department_teacher_third = "Sagar Mishra";
    $department_teacher_third_intro = "Hello everyone , I am a teacher of your
    branch of machnical engineering . I shall teach about the Energy Science and Technology.I am post graduate from the IIT Kanpur in 2019 in subject of Energy Science and Technology Engineering.";

    $department_teacher_fourth = "Dr. Sushila";
    $department_teacher_fourth_intro = "Hello everyone , I am a teacher of your
    branch of machnical engineering . I shall teach about the Piping Design.I am post graduate from the IIT Kanpur in 2019 in subject of Piping Design Engineering.";

    $department_teacher_fifth = "Dr. Ahmed";
    $department_teacher_fifth_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the thermodynamics.I am post graduate from the IIT Kanpur in 2019 in subject of Architecture Engineering.";

    require ('../includes/_Departments.php');

    // <!-- Footer container is started  -->
    $script = ' <!-- Script for the gallery  -->
    <script>
        let full_img_box = document.getElementById("full-img-box");
        let full_img = document.getElementById("full-img");

        function openFullImg(pic) {
            full_img_box.style.display = "flex";
            full_img.src = pic;
        }
        function closeFullImg() {
            full_img_box.style.display = "none";
        }
    </script>';
    require ('../includes/_Footer.php');
?>