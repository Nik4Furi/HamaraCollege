<?php
    require ('../includes/_Connect.php');
    $title = "Department of Civil Engineering";
    $links = '<link rel="stylesheet" href="../static/css/department.css"><br>
              <link rel="stylesheet" href="../static/css/gallery.css">';
    require ('../includes/_InnerHeader.php');
?>

<!-- departments of the computer Science -->
<?php
    $heading = "Civil Engineering";
    $department = "Civil Engineering";
    $img_path = "civil";

    //teachers details
    $department_teacher_first = "Shyam Sundar";
    $department_teacher_first_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the thermodynamics.I am post graduate from the IIT Kanpur in 2019 in subject of Architecture Engineering.";
    $department_teacher_second = "Mahendra Rawat";
    $department_teacher_second_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the Cement.I am post graduate from the IIT  Delhi in 2020 in subject of Building Economics.";
    $department_teacher_third = "Rohan Das";
    $department_teacher_third_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the buildings laws.I am post graduate from the IIT  Madras in 2017 in subject of Building Law and Regulations.";
    $department_teacher_fourth = "Shikha Maheta";
    $department_teacher_fourth_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the buildings planings.I am  graduate from the IIT Guahati in 2021 in subject of Building, Planning and Construction Management.";
    $department_teacher_fifth = "Priya Balani";
    $department_teacher_fifth_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the buildings constructions.I am  graduate from the IIT Kanpur in 2020 in subject of Transportation Engineering.";

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