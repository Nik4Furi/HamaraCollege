<?php
$title = "Admin Dashboard add new student";
$links = '<link rel="stylesheet" href="../static/css/form.css"><br>';
require ('../includes/innerHeader.php');
?>
<?php
require ('../includes/connect.php');


?>

<!-- Form to add the new student  -->
<?php
$candidate = 'Teacher';
$candidate_relation = 'Teacher'; 
// <!-- SignIn Page Crouser from the top of window -->
?>

<div id="sign col">
    <h1 class="h-primary" style="text-align:center">You add the <sapn class="mark">
            <?php echo $candidate?>
        </sapn>
    </h1>
    <form method="post" id="form" class="form">
        <div class="inputs">
            <label for="name">Enter Name of
                <?php echo $candidate?>
            </label>
            <input type="text" name="name" id="name" required autocomplete="none" autofocus>
        </div>

        <div class="inputs">
            <label for="semester">Enter Semester of
                <?php echo $candidate_relation?>
            </label>
            <select name="semester" id="semester" required>
                <optgroup label="Odd No.">
                    <option value="1st">1st</option>
                    <option value="3rd">3rd</option>
                    <option value="5th">5th</option>
                    <option value="7th">7th</option>
                </optgroup>
                <optgroup label="Even No.">
                    <option value="2nd">2nd</option>
                    <option value="4th">4th</option>
                    <option value="6th">6th</option>
                    <option value="8th">8th</option>
                </optgroup>
            </select>
        </div>
        <div class="inputs">
            <label for="branch">Enter Branch of
                <?php echo $candidate_relation?>
            </label>
            <select name="branch" id="branch">
                <option value="CSE">CSE</option>
                <option value="CE">CE</option>
                <option value="EE">EE</option>
                <option value="ME">ME</option>
            </select>
        </div>
        <div class="inputs">
            <label for="email">Enter Email of
                <?php echo $candidate?>
            </label>
            <input type="email" name="email" id="email" required autocomplete="none">
        </div>
        <div class="inputs">
            <label for="clgid">Enter ClgID/Username of
                <?php echo $candidate_relation?>
            </label>
            <input type="text" name="clgid" id="clgid" required autocomplete="none">
        </div>
        <div class="inputs">
            <label for="password">Enter Password of
                <?php echo $candidate?>t
            </label>
            <input type="password" name="password" id="password" required autocomplete="none">
        </div>

        <button class="btn" name="add" type="submit" id="add">Add
            <?php echo $candidate?>
        </button>

    </form>
    <?php
    // echo "Can you inserted the db<br>";
     //Declarations the php variables 
     if (isset($_POST['add'])) {
         # code...
        $name = $_POST['name'];
        $semester = $_POST['semester'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $clgid = $_POST['clgid'];
        $password = $_POST['password'];

        $sql = "insert into addteacher(name, semester, branch, email, clgid, password) values('$name','$semester','$branch','$email','$clgid','$password')";
        $result = mysqli_query($conn,$sql);
        // echo var_dump($result);
        if ($result) {
            echo "<script>alert('You added new teacher details')</script>"; ?>
            <meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/admin/admin.php" />
            <?php
                } 
                else{
                    echo "<script>alert('You did not insert details of teacher')</script>";
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