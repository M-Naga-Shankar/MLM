<?php
include("includes/config.php");
$id1=$_GET['del'];
mysqli_query($conn,"delete from news where newsId='$id1'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='news.php';
</script>
