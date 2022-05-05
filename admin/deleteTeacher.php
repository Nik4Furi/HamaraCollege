<?php
$title = "Admin Dashboard add new student";
$links = '<link rel="stylesheet" href="../static/css/form.css"><br>';
require ('../includes/innerHeader.php');
?>
<?php
require ('../includes/connect.php');

?>

<!-- Delete the records  -->
<?php
$clgid = $_GET['clgid'];

$sql = "delete from addteacher where clgid = '$clgid'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('You delete the details of teacher')</script>"; ?>
<meta http-equiv="refresh" content="0; url = http://localhost/HamaraCollege/admin/admin.php" />
<?php
}
else{
    echo "<script>alert('You didnot delete the details of teacher')</script>"; 
    echo "Error: ".mysqli_connect_error($conn,$sql);
           
}
?>


<!-- Footer container is started  -->
<?php
$script = ' <!-- all/main scripts  -->
<script src="../static/js/main.js"></script> ';
require ('../includes/footer.php');
?>