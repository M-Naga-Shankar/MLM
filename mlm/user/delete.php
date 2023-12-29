<?php
include("includes/config.php");
$id1=$_GET['del1'];
mysqli_query($conn,"delete from posts where postId='$id1'");
?>
<script type="text/javascript">

window.location='posts.php';
</script>
