<?php
session_start();
$_SESSION['Id'] = '';
session_destroy();
echo "<script>document.location.href='index.html'</script>";

?>