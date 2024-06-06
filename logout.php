<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
if(session_destroy()) {
    // Redirect to login page with success message
    header("location: login_2.php?logout=success");
} else {
    // Redirect to login page with failure message
    header("location: login_2.php?logout=failure");
}
exit;
?>