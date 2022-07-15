<?php
    require ('../includes/_Connect.php');
    $title = "Department of Electrical Engineering";
    $links = '<link rel="stylesheet" href="../static/css/department.css"><br>
            <link rel="stylesheet" href="../static/css/gallery.css">';
    require ('../includes/_InnerHeader.php');

?>
    
<!-- departments of the computer Science -->
<?php
    $heading = "Electrical Engineering";
    $department = " Electrical Engineering";
    $img_path = "electrical";

    //teachers details
    $department_teacher_first = "Pragati";
    $department_teacher_first_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the Audio servicing.I am post graduate from the IIT Kanpur in 2019 in subject of Audio Servicing Engineering.";

    $department_teacher_second = "Dr. Prakash Meena";
    $department_teacher_second_intro = "Hello everyone , I am a teacher of your
    branch of electrical engineering . I shall teach about the Electrical installation work.I am post graduate from the IIT Kanpur in 2019 in subject of Electrical Installation Work Engineering.";

    $department_teacher_third = "Ms. Sulochana Walia";
    $department_teacher_third_intro = "Hello everyone , I am a teacher of your
    branch of electrical engineering . I shall teach about the Electrical systems.I am post graduate from the IIT Kanpur in 2019 in subject of Electrical Systems Engineering.";

    $department_teacher_fourth = "Dr. Bavya";
    $department_teacher_fourth_intro = "Hello everyone , I am a teacher of your
    branch of electrical engineering . I shall teach about the Circuits .I am post graduate from the IIT Kanpur in 2019 in subject of Circuits  Engineering.";

    $department_teacher_fifth = "Priti Singh";
    $department_teacher_fifth_intro = "Hello everyone , I am a teacher of your
    branch of electrical engineering . I shall teach about the Power Systems.I am post graduate from the IIT Kanpur in 2019 in subject of Power Systems Engineering.";

     require ('../includes/_Departments.php');

    //  <!-- Footer container is started  -->
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