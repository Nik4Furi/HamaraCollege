<?php
$title = "Department of Computre Science Engineering";
$links = '<link rel="stylesheet" href="../static/css/department.css"><br>
<link rel="stylesheet" href="../static/css/gallery.css">';
require ('../includes/innerHeader.php');
?>
<?php
require ('../includes/connect.php');
?>


<!-- departments of the computer Science -->
<?php
    $heading = "Computer Science";
    $department = "Computer Sciecne";
    $img_path = "computer";

    //teachers details
    $department_teacher_first = "Anil Singh";
    $department_teacher_first_intro = "Hello everyone , I am a teacher of your
    branch of computer science engineering . I shall teach about the java.I am post graduate from the IIT Kanpur in 2019 in subject of Android Development.";
    $department_teacher_second = "Vishal Balani";
    $department_teacher_second_intro = "Hello everyone , I am a teacher of your
    branch of civil engineering . I shall teach about the python.I am post graduate from the IIT Kanpur in 2019 in subject of Advance Python and Data Analyst.";
    $department_teacher_third = "Dr. Sneha";
    $department_teacher_third_intro = "Hello everyone , I am a teacher of your
    branch of computer science engineering . I shall teach about the linux.I am post graduate from the IIT Jodhpur in 2019 in subject of Cyber Security.";
    $department_teacher_fourth = "Shital Mayor";
    $department_teacher_fourth_intro = "Hello everyone , I am a teacher of your
    branch of computer science engineering . I shall teach about the Web development.I am post graduate from the IIT Kanpur in 2019 in subject of Web Development.";
    $department_teacher_fifth = "Subash Gupta";
    $department_teacher_fifth_intro = "Hello everyone , I am a teacher of your
    branch of computer science engineering . I shall teach about the machine learning.I am post graduate from the IIT Kanpur in 2019 in subject of Machine Learning";



 require ('../includes/departments.php');
?>



<!-- Footer container is started  -->
<?php
$script = '<script>
let burger = document.querySelector(".burger");
let line = document.querySelectorAll(".line");
let nav = document.getElementById("nav");
let navlist = document.getElementById("navlist");

burger.addEventListener("click", handleNav);

function handleNav(e) {
    if ( nav.style.height == "34%") {
    // console.log("this is if oe ssrweclick on ");

        nav.style.height = "80px";
        navlist.style.display = "none";

    }
    else{
    // console.log("this is click on ");

        nav.style.height = "34%";
        navlist.style.display = "block";
    }

}
</script>

<!-- Script for the gallery  -->
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
require ('../includes/footer.php');
?>