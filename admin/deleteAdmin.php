<?php
require ('../includes/_Connect.php');
$title = "Admin Dashboard add new student";
$links = '<link rel="stylesheet" href="../static/css/form.css"><br>';
require ('../includes/_InnerHeader.php');
?>

<!-- Delete the records  -->
<?php
$clgid = $_GET['clgid'];

$sql = "delete from addadmin where clgid = '$clgid'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('You deleted the details of admin')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/admin/admin.php" />
<?php
}
?>


<!-- Footer container is started  -->
<?php
    $script = ' <!-- all/main scripts  -->
    <script src="../static/js/main.js"></script> ';
    require ('../includes/_Footer.php');
?>