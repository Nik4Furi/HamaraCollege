<?php
$title = "About";
$links = ' <link rel="stylesheet" href="./static/css/admin.css"><br>';
require ('./includes/outerHeader.php');
?>
<?php
    require ('./includes/connect.php');
 ?>

<!-- our main container is started form here  -->
<section class="pgprogrames-container col ">
    <h1 class="h-primary">You read about the our college <span class="mark">pg programes</span></h1>
    <p class="para">You can read about the programes, given or presented by our college</p>
    <!-- m.tech programe intro  -->
    <div class="m-tech col" style="margin: 5px 4px; padding: 3px 5px;">
        <h2 class="h-secondry">Master Of Technology (<span class="mark">m.tech</span>)</h2>
        <p class="para-sm">That's is 2 years (4 semester) programe you have thats opertunities. We will start in the
            begining of our college ingoration function 2018.</p>
        <!-- table of thats opertunites  -->
        <table class="table" id="table">
            <thead class="t-head">
                <tr class="head-box">
                    <th class="t-box">SNo.</th>
                    <th class="t-box">Course</th>
                    <th class="t-box">INTAKE</th>

                </tr>
            </thead>
            <tbody class="t-body">
                <tr class="head-box">
                    <td class="t-box">1</td>
                    <td class="t-box">COMPUTER SCIENCE & ENGINEERING</td>
                    <td class="t-box">10</td>
                </tr>
                <tr class="head-box">
                    <td class="t-box">2</td>
                    <td class="t-box">ROBOTICES MACHINES</td>
                    <td class="t-box">10</td>
                </tr>
                <tr class="head-box">
                    <td class="t-box">3</td>
                    <td class="t-box">SOFTWARE ENGINEERING</td>
                    <td class="t-box">10</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr class="hr">

    <!-- mca containing section  -->
    <div class="mca col" style="margin: 5px 4px; padding: 3px 5px;">
        <h2 class="h-secondry"> <span class="mark">Master of Computer Applications (MCA)</span> </h2>
        <p class="para">Three years ( 5 semesters + 1 industrial Training) programme in the Department of MCA. Students
            are selected for admission to the MCA programme through Rajasthan MCA Admission Test (RMCAAT).</p>
    </div>
    <hr class="hr">

    <!-- mca containing section  -->
    <div class="mca col" style="margin: 5px 4px; padding: 3px 5px;">
        <h2 class="h-secondry"> <span class="mark">Master of Business Administration (MBA) </span> </h2>
        <p class="para"> Two years ( 4 semesters ) programme in the Department of MBA. Students are selected for
            admission to the MBA programme through Rajasthan Management Admission Test (RMAT).</p>
    </div>
</section>

<!-- Footer section  -->

<?php
$script = '';
require ('./includes/footer.php');
?>