<?php
    require ('./includes/_Connect.php');
    error_reporting(0);
    $title = "Syllabus Of Used In Examination HamaraCollege";
    $links = ' <link rel="stylesheet" href="./static/css/syllabus.css"><br>';
    require ('./includes/_OuterHeader.php');
?>

<?php
    $semester=$branch="asd";
?>

<div class="col" id="sign" style="min-height:60vh;">
    <h1 class="h-primary">Syllabus</h1>

    <!-- form for search the syllabus  -->
    <form method="post" class="form col">
        <!-- year writte  -->
        <label for="year">Enter Your Year</label>
        <input type="number" placeholder="in number" autofocus required name="year" id="year">
        <?php $year=$_POST['year'];?>

        <!-- branch related info  -->
        <label for="branch">Choose Your Branch</label>
        <select name="branch">
            <option value="CE">Civil Engineering</option>
            <option value="CS">Computer Science and Engineering</option>
            <option value="EE">ELectrical Engineering</option>
            <option value="ME">Mechanical Engineering</option>
        </select>
        <?php $branch=$_POST['branch'];?>

        <!-- buttons  -->
        <div id="bta">
            <input type="submit" value="search" class="btn">
            <input type="reset" value="reset" class="btn">
        </div>
    </form>

</div>

<div id="tab">
    <table class="table">
        <thead class="t-head">
            <tr class="head-box">
                <th class="t-box">Year</th>
                <th class="t-box">Branch</th>
                <th class="t-box">Link</th>
            </tr>
        </thead>
        <tbody class="t-head">
            <tr>
                <td>
                    <?php echo $year ?>
                </td>
                <td class="t-box">
                    <?php echo $branch ?>
                </td>
                <td class="t-box">

<?php
    // Conditions for checking the which year and branch selected 
    if($year==1  && ($branch=="CS" || $branch=="CE" || $branch=="EE" || $branch=="ME")){
    echo "<a href='https://www.btu.ac.in/BTU/wp-content/uploads/2015/05/b.tech-I-year-Syllabus.pdf' target='_blank'>Click Here</a>";
    }
                    
    else if($year==2 && ($branch=="CS" || $branch=="CE" || $branch=="EE" || $branch=="ME")){
        echo "<a href='https://btu.ac.in/BTU/wp-content/uploads/2019/07/B.Tech-CS-Syllabus.pdf' target='_blank'>Click Here</a>";
    }

    else if($year==3 && ($branch=="CS" || $branch=="CE" || $branch=="EE" || $branch=="ME")){
    echo "<a href='https://www.btu.ac.in/BTU/wp-content/uploads/2020/07/Computer-Science-and-Engineering-03.pdf' target='_blank'>Click Here</a>";
    }

    else if($year==4 && ($branch=="CS" || $branch=="CE" || $branch=="EE" || $branch=="ME")){
        echo "https://btu.ac.in/home/saisupport//Images/Media/6-CS-7-to-8-Scheme_Syllabus.pdf' target='_blank'>Click Here</a>";
    }
    else{
        echo "<script>alert('No record found, Plz check again')</script>";  
    }
    mysqli_close($conn);
?>

                </td>
            </tr>
        </tbody>
    </table>

</div>

<?php
$script = '';
require ('./includes/_Footer.php');
?>