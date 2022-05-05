<?php
$title = "Login for Parents";
$links = '<link rel="stylesheet" href="../static/css/login.css">';
require ('../includes/innerHeader.php');
?>
<?php
require ('../includes/connect.php');
?>

<!-- Mani Container  -->
<?php
$heading = "When you look into your <sapn class='mark'> mother's eyes</sapn>, you know that is the purest love you can find on this earth.";
$img_path = 'parents';
$img_path_file = 'pare-0.png';
$action_folder = 'parent';
$action_file = 'parent';
// require ('../includes/loginUser.php');
?>


<!-- studetn login page  -->
<section class="login ">
    <h1 class="h-primary" style="text-align: center;">
        <?php echo $heading ?>
    </h1>
    <div class="login-container row">
        <!-- left container for img  -->
        <div class="login-left col">

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

    $sql = "select * from addparent where parent_clgid = '$username' && parent_password = '$password'";
    $result = mysqli_query($conn,$sql);
    // check the result exist or not 
    if ($result) {
        // echo "YOu succesfully login";

    }
    else{
        echo "<script>alert('Sorry this is server error')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/index.php" />
<?php
    }
    $num = mysqli_num_rows( $result);
    // echo $num;
    if ($num == 1) {
     //Checking the seesion is started or create
  $row = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION['username'] = $row['parent_clgid'];
    $_SESSION['password'] = $row['parent_password'];
    $_SESSION['name'] = $row['parent_name'];
    // echo $_SESSION['username'] ;
    // echo $_SESSION['password'] ;
  }  
  else{
      echo "<script>alert('You are fill wrong details')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/parent/index.php" />
<?php
  }
   if (isset($_SESSION['username'])) {
    ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/parent/parent.php" />
<?php
   }
}
else{
    echo "<script>alert('You are fill wrong details')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/teacher/index.php" />
<?php
}
}
mysqli_close($conn);
?>


<!-- Footer container is started  -->
<?php
$script = '';
require ('../includes/footer.php');
?>