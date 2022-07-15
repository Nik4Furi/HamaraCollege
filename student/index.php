<?php
    require ('../includes/_Connect.php');
    $title = "Login for Student";
    $links = '<link rel="stylesheet" href="../static/css/login.css">';
    require ('../includes/_InnerHeader.php');
?>

<!-- Mani Container  -->
<?php
    $heading = "The man who does not read <span class='mark'> books has no advantage over the one who cannot read them";
    $img_path = 'students';
    $img_path_file = 'stu-0.png';
    $action_folder = 'student';
    $action_file = 'student';
?>

<!-- studetn login page  -->
<section class="login ">
    <h1 class="h-primary" style="text-align: center;">
        <?php echo $heading ?>
    </h1>
    <div class="login-container row">
        <!-- left container for img  -->
        <div class="login-left col" id="login-left">

            <div class="login-left-img">
                <img src="../static/img/<?php echo $img_path ?>/<?php echo $img_path_file ?>" alt="workshop ">
            </div>
        </div>
        <!-- right container for the form  -->
        <div class="login-right col">

            <form id="form" class="form" method="post">
                <div class="form-input">
                    <label for="username">Enter Your Username</label>
                    <input type="text" name="username" id="username" class="input" placeholder="Enter your username"
                        required>
                </div>
                <div class="form-input ">
                    <label for="password">Enter Your Password</label>
                    <input type="password" name="password" id="password" class="input" placeholder="Enter your password"
                        required>
                </div>
                <div class="form-input ">
                    <button class="btn" type="submit" name="login">Login</button>
                </div>
            </form>
        </div>
</section>

<!-- check the username is logged or not  -->
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from addstudent where clgid = '$username' && password = '$password'";
    $result = mysqli_query($conn,$sql);
    // check the result exist or not 
    if ($result) {
        // echo "YOu succesfully login";
    }
    else{
        echo "Failed to login ".mysqli_connect_error($cnon, $sql);
    }
    $num = mysqli_num_rows( $result);
    // echo $num;
    if ($num == 1) {
  //Checking the seesion is started or create
  $row = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION['username'] = $row['clgid'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['name'] = $row['name'];
    // echo $_SESSION['username'] ;
    // echo $_SESSION['password'] ;
  }  
  else{
      echo "<script>alert('You are fill wrong details')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/student/index.php" />

<?php
  }
   if (isset($_SESSION['username'])) {
?>

<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/student/student.php" />

<?php
        }
    }
    else{
    echo "<script>alert('You are fill wrong details')</script>"; ?>

<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/student/index.php" />

<?php
    }
    }
    // mysqli_close($conn);
?>

<!-- Footer container is started  -->
<?php
$script = '';
require ('../includes/_Footer.php');
?>