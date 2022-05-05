<?php
$title = "Admin Dashboard add new student";
$links = '<link rel="stylesheet" href="../static/css/form.css"><br>';
require ('../includes/innerHeader.php');
?>
<?php
require ('../includes/connect.php');
$candidate = 'Admin';
$candidate_relation = 'Admin';

// display query
$clgid = $_GET['clgid'];

$sql = 'select * from addadmin';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$branch_select = $row['branch'];
$semester_select = $row['semester'];
?>

<!-- Updatet the students details  -->
<div id="sign col">
    <h1 class="h-primary" style="text-align:center">You update the detail of <sapn class="mark">
            <?php echo $candidate?>
        </sapn>
    </h1>
    <form method="post" id="form" class="form" action="">
        <div class="inputs">
            <label for="name">Enter Name of
                <?php echo $candidate?>
            </label>
            <input type="text" value="<?php echo $row['name']?>" name="name" id="name" required autocomplete="none"
                autofocus>
        </div>

        <div class="inputs">
            <label for="semester">Enter Semester of
                <?php echo $candidate_relation?>
            </label>
            <select name="semester" id="semester" required>
                <optgroup label="Odd No.">
                    <option value="1st">
                        <?php if ($semester_select == '1st') {
                       echo 'selected="selected"';
                    }?>
                        1st
                    </option>
                    <option value="3rd">
                        <?php if ($semester_select == '3rd') {
                       echo 'selected="selected"';
                    }?>3rd
                    </option>
                    <option value="5th">
                        <?php if ($semester_select == '5th') {
                       echo 'selected="selected"';
                    }?>5th
                    </option>
                    <option value="7th">
                        <?php if ($semester_select == '7th') {
                       echo 'selected="selected"';
                    }?>7th
                    </option>
                </optgroup>
                <optgroup label="Even No.">
                    <option value="2nd">
                        <?php if ($semester_select == '2nd') {
                       echo 'selected="selected"';
                    }?>2nd
                    </option>
                    <option value="4th">
                        <?php if ($semester_select == '4th') {
                       echo 'selected="selected"';
                    }?>4th
                    </option>
                    <option value="6th">
                        <?php if ($semester_select == '6th') {
                       echo 'selected="selected"';
                    }?>6th
                    </option>
                    <option value="8th">
                        <?php if ($semester_select == '8th') {
                       echo 'selected="selected"';
                    }?>8th
                    </option>
                </optgroup>
            </select>
        </div>
        <div class="inputs">
            <label for="branch">Enter Branch of
                <?php echo $candidate_relation?>
            </label>
            <select name="branch" id="branch">
                <option value="CSE">
                    <?php if ($branch_select == 'CSE') {
                       echo 'selected="selected"';
                    }?>CSE
                </option>
                <option value="CE">
                    <?php if ($branch_select == 'CE') {
                       echo 'selected="selected"';
                    }?>CE
                </option>
                <option value="EE">
                    <?php if ($branch_select == 'EE') {
                       echo 'selected="selected"';
                    }?>EE
                </option>
                <option value="ME">
                    <?php if ($branch_select == 'ME') {
                       echo 'selected="selected"';
                    }?>ME
                </option>
            </select>
        </div>
        <div class="inputs">
            <label for="email">Enter Email of
                <?php echo $candidate?>
            </label>
            <input type="email" value="<?php echo $row['email']?>" name="email" id="email" required autocomplete="none">
        </div>
        <div class="inputs">
            <label for="clgid">Enter ClgID/Username of
                <?php echo $candidate_relation?>
            </label>
            <input type="text" value="<?php echo $row['clgid']?>" name="clgid" id="clgid" required autocomplete="none">
        </div>
        <div class="inputs">
            <label for="password">Enter Password of
                <?php echo $candidate?>t
            </label>
            <input type="password" value="<?php echo $row['password']?>" name="password" id="password" required
                autocomplete="none">
        </div>

        <button class="btn" name="update" type="update" id="update">Update details
            <?php echo $candidate?>
        </button>

    </form>
    <?php
    //updated the query
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $semester = $_POST['semester'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $clgid_new = $_POST['clgid'];
        $password = $_POST['password'];

        $sql ="update addadmin set name='$name', semester = '$semester', branch = '$branch',email = '$email',clgid = '$clgid_new',password= '$password' where clgid = '$clgid' ";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>alert('You updated the admin details ')</script>"; ?>
    <meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/admin/admin.php" />
    <?php
        } 
        else{
            echo "<script>alert('You admin details not inserted details updated')</script>";
        }
    }
    ?>
</div>



<!-- Footer container is started  -->
<?php
$script = ' <!-- all/main scripts  -->
<script src="../static/js/main.js"></script> ';
require ('../includes/footer.php');
?>