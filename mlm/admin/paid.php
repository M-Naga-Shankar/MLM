<?php
session_start();
if(!isset($_SESSION['aid']))
{
    header("location:../index.php");
}
include("includes/config.php");
$id1=$_GET['uid'];
$sql=mysqli_query($conn,"UPDATE `user` SET `earning`='0' WHERE userId='$id1'");

?>
<script type="text/javascript">
window.location='client_msg.php';
</script>
