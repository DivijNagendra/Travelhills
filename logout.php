<?php
session_start();
session_destroy();
echo "<script>alert('LOGOUT SUCCESSFUL!!');
   window.location.assign('logout1.php');
</script>";

?>