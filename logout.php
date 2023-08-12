<?php
// Start or continue session
session_start();

// Destroy variables of session
session_unset();

// Destroy session
session_destroy();

// Redirect to an index page 
header('Location: index.php');
exit();
?>