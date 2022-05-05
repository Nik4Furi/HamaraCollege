<?php
$title = "About";
$links = ' <link rel="stylesheet" href="./static/css/admin.css"><br>';
require ('./includes/outerHeader.php');
?>
<?php
    require ('./includes/connect.php');
 ?>

<!-- our main content container  -->

<!-- our main container is started form here  -->
<section class="pgprogrames-container col ">
    <h1 class="h-primary">You read about the our college <span class="mark">UG programes</span></h1>
    <p class="para">You can read about the programes, given or presented by our college</p>
    <!-- b.tech programe intro  -->
    <div class="b-tech col"  style="margin: 5px 4px; padding: 3px 5px;">
        <h2 class="h-secondry">BACHELOR Of Technology (<span class="mark">B.tech</span>)</h2>
        <p class="para-sm">That's is 4 years (8 semester) programe you have thats opertunities. We will start in the
            begining of our college ingoration function 2017.</p>
        <p class="para">Additional to above specified intake, 10% of total intake is additional for fee waiver students.
            Students are selected for admission to the above programmes through REAP and JEE.</p>
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
                    <td class="t-box">100</td>
                </tr>
                <tr class="head-box">
                    <td class="t-box">2</td>
                    <td class="t-box">CIVIL ENGINEERING</td>
                    <td class="t-box">30</td>
                </tr>
                <tr class="head-box">
                    <td class="t-box">3</td>
                    <td class="t-box">ELECTRICAL ENGINEERING</td>
                    <td class="t-box">80</td>
                </tr>
                <tr class="head-box">
                    <td class="t-box">4</td>
                    <td class="t-box">MACHINCAL ENGINEERING</td>
                    <td class="t-box">90</td>
                </tr>
            </tbody>
        </table>
    </div>

</section>


<!-- Footer section  -->

<?php
$script = '';
require ('./includes/footer.php');
?>