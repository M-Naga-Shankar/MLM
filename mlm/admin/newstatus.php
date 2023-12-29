<?php
include("includes/config.php");
$id1=$_GET['id'];
mysqli_query($conn,"UPDATE `news` SET `status`=0 where 1");
mysqli_query($conn,"UPDATE `news` SET `status`=1 WHERE newsId='$id1'");
?>
<script type="text/javascript">
alert("Successfully Marked");
window.location='news.php';
</script>
