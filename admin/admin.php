<?php
    session_start();
    require ('../includes/_Connect.php');
    $title = "Admin Dashboard";
    $links = '<link rel="stylesheet" href="../static/css/student.css"><br>
            <link rel="stylesheet" href="../static/css/admin.css"><br>
            <link rel="stylesheet" href="../static/css/main.css"><br>
            <!-- chart script  -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
    require ('../includes/_InnerHeader.php');
?>

<!-- Dashboard container is start from here you can see that  -->
<?php
    $img_path = 'students';
    $img_path_file = 'stu-0.png';

    // All dashboards titles 
    $dashboard_title_first = 'Admins';  
    $dashboard_title_second = 'Students';  
    $dashboard_title_third = 'Parents';  
    $dashboard_title_fourth = 'Teachers';  
?>

<!-- studetn deatils containing from here  -->
<section class="student-cotainer ">
    <div class="banner">
        <div class="banner-left">
            <h1 class="h-primary"><span class="mark">
                  Welcome Admin , thanks for support
                </span> </h1>
        </div>
        <div class="banner-right">
          
        </div>
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

                    <div class="border-shap">
                        <li class="tab"><a data-switcher data-tab="3">
                                <?php echo $dashboard_title_third ?>
                            </a></li>
                    </div>
                    <div class="border-shap">
                        <li class="tab"><a data-switcher data-tab="4">
                                <?php echo $dashboard_title_fourth ?>
                            </a></li>
                    </div>
                </ul>
            </div>
        </div>

        <!-- All the swichtable content are here  -->
        <div class="right pages">
            <!-- dashboard all containing properties -->
            <div class="page is-active col" data-page="1">
                <div class="student-see-container col media-w">
                    <h1 class="h-primary">You can see the all the <span class="mark">Admins Details</span></h1>
                    <!-- add the students -->
                    <div class="line">
                        <a href="./addAdmin.php">
                            <button class="btn">Add Admin</button></a>
                    </div>
                    <table class="table" id="table">
                        <thead class="t-head">
                            <tr class="head-box">
                                <th class="t-box">SNo.</th>
                                <th class="t-box">Admin-Name</th>
                                <th class="t-box">Admin-Semester</th>
                                <th class="t-box">Admin-branch</th>
                                <th class="t-box">Admin-Email</th>
                                <th class="t-box">Admin-ClgID</th>
                                <th class="t-box">password</th>
                                <th class="t-box">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            <?php 
                                    //display query is started 
                                    $sql = 'select * from addadmin';
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 1;
                                    if ($result->num_rows>0) {
                                        
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                 echo " 
                                 <tr class='head-box'>
                                <td class='t-box'>".$sno."</td>
                                <td class='t-box'>". $row['name']."</td>
                                <td class='t-box'>".$row['branch']."</td>
                                <td class='t-box'>".$row['semester']."</td>
                                <td class='t-box'>".$row['email']."</td>
                                <td class='t-box'>".$row['clgid']."</td>
                                <td class='t-box'>".$row['password']."</td>
                                <td class='row'>".
                                "<a href='./editAdmin.php?clgid=$row[clgid]'>
                                    <button class='btn'>Edit</button></a>  
                                    <a href='./deleteAdmin.php?clgid=$row[clgid]'> <button class='btn'onclick=' return checkDelete()'>Delete</button></a>
                                </td>
                                </tr>";
                                $sno ++;
                            }
                            }
                            ?>
                            <script>
                                function checkDelete() {
                                    return confirm("You really want to delete this row");
                                }
                            </script>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- All activites are here  -->
            <div class="page col" data-page="2">
                <div class="student-see-container col">
                    <h1 class="h-primary">You can see the all the <span class="mark">studentss Details</span></h1>
                    <!-- add the students -->
                    <div class="line">
                        <a href="./addStudent.php">
                            <button class="btn">Add Student</button> </a>
                    </div>
                    <table class="table" id="tabl">
                        <thead class="t-head">
                            <tr class="head-box">
                                <th class="t-box">SNo.</th>
                                <th class="t-box">Name</th>
                                <th class="t-box">branch</th>
                                <th class="t-box">Student-Semster</th>
                                <th class="t-box">Email</th>
                                <th class="t-box">ClgID</th>
                                <th class="t-box">password</th>
                                <th class="t-box">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">

                            <?php 
                                    //display query is started 
                                    $sql = 'select * from addstudent';
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 1;
                                    if ($result->num_rows>0) {
                                        
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                 echo " 
                                 <tr class='head-box'>
                                <td class='t-box'>".$sno."</td>
                                <td class='t-box'>". $row['name']."</td>
                                <td class='t-box'>".$row['branch']."</td>
                                <td class='t-box'>".$row['semester']."</td>
                                <td class='t-box'>".$row['email']."</td>
                                <td class='t-box'>".$row['clgid']."</td>
                                <td class='t-box'>".$row['password']."</td>
                                <td class='row'>".
                                "<a href='./editStudent.php?clgid=$row[clgid]'>
                                    <button class='btn'>Edit</button></a>  
                                    <a href='./deleteStudent.php?clgid=$row[clgid]'> <button class='btn'onclick=' return checkDelete()'>Delete</button></a>
                                </td>
                                </tr>";
                                $sno ++;
                            }
                            }
                            ?>
                            <script>
                                function checkDelete() {
                                    return confirm("You really want to delete this row");
                                }
                            </script>


                        </tbody>

                    </table>
                </div>
            </div>

            <div class="page" data-page="3">
                <div class="parent-see-container col">
                    <h1 class="h-primary">You can see the all the <span class="mark">Parents Details</span>
                    </h1>
                    <!-- add the students -->
                    <div class="line">
                        <a href="./addParent.php">
                            <button class="btn">Add Parent</button></a>
                    </div>
                    <table class="table" id="table">
                        <thead class="t-head">
                            <tr class="head-box">
                                <th class="t-box">SNo.</th>
                                <th class="t-box">Parent-Name</th>
                                <th class="t-box">Student-Semester</th>
                                <th class="t-box">Student-branch</th>
                                <th class="t-box" width="5%">Parent-Email</th>
                                <th class="t-box">Student-ClgID</th>
                                <th class="t-box">password</th>
                                <th class="t-box">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            <?php 
                                    //display query is started 
                                    $sql = 'select * from addparent';
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 1;
                                    if ($result->num_rows>0) {
                                        
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                 echo " 
                                 <tr class='head-box'>
                                <td class='t-box'>".$sno."</td>
                                <td class='t-box'>". $row['parent_name']."</td>
                                <td class='t-box'>".$row['parent_children_branch']."</td>
                                <td class='t-box'>".$row['parent_children_semester']."</td>
                                <td class='t-box'>".$row['parent_email']."</td>
                                <td class='t-box'>".$row['parent_clgid']."</td>
                                <td class='t-box'>".$row['parent_password']."</td>
                                <td class='row'>".
                                "<a href='./editParent.php?clgid=$row[parent_clgid]'>
                                    <button class='btn'>Edit</button></a>  
                                    <a href='./deleteParent.php?clgid=$row[parent_clgid]'> <button class='btn'onclick=' return checkDelete()'>Delete</button></a>
                                </td>
                                </tr>";
                                $sno ++;
                            }
                            }
                            ?>
                            <script>
                                function checkDelete() {
                                    return confirm("You really want to delete this row");
                                }
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="page" data-page="4">
                <div class="student-see-container col">
                    <h1 class="h-primary">You can see the all the <span class="mark">Teachers Details</span></h1>
                    <!-- add the students -->
                    <div class="line">
                        <a href="./addTeacher.php">
                            <button class="btn">Add Teacher</button></a>
                    </div>
                    <table class="table" id="table">
                        <thead class="t-head">
                            <tr class="head-box">
                                <th class="t-box">SNo.</th>
                                <th class="t-box">Teacher-Name</th>
                                <th class="t-box">Teacher-branch</th>
                                <th class="t-box">Teacher-Semester</th>
                                <th class="t-box">Teacher-Email</th>
                                <th class="t-box">Teacher-ClgID</th>
                                <th class="t-box">password</th>
                                <th class="t-box">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            <?php 
                                    //display query is started 
                                    $sql = 'select * from addteacher';
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 1;
                                    if ($result->num_rows>0) {
                                        
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                 echo " 
                                 <tr class='head-box'>
                                <td class='t-box'>".$sno."</td>
                                <td class='t-box'>". $row['name']."</td>
                                <td class='t-box'>".$row['branch']."</td>
                                <td class='t-box'>".$row['semester']."</td>
                                <td class='t-box'>".$row['email']."</td>
                                <td class='t-box'>".$row['clgid']."</td>
                                <td class='t-box'>".$row['password']."</td>
                                <td class='row'>".
                                "<a href='./editTeacher.php?clgid=$row[clgid]'>
                                    <button class='btn'>Edit</button></a>  
                                    <a href='./deleteTeacher.php?clgid=$row[clgid]'> <button class='btn'onclick=' return checkDelete()'>Delete</button></a>
                                </td>
                                </tr>";
                                $sno ++;
                            }
                            }
                            ?>
                            <script>
                                function checkDelete() {
                                    return confirm("You really want to delete this row");
                                }
                            </script>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer container is started  -->
<?php
    $script = ' <!-- all/main scripts  -->
                <script src="../static/js/main.js"></script> ';
    require ('../includes/_Footer.php');
?>