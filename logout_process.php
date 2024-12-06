<?php
// Start session
session_start();

// Destroy session data
session_destroy();

// Redirect user to login page or any other page after logout
header("Location: login2.php");
exit();
?>
