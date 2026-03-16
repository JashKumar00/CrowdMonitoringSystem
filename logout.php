<?php
// Include necessary files
require_once 'includes/config.php';
require_once 'includes/functions.php';
require_once 'includes/auth.php';

// Logout the user
logout_user();

// Redirect to login page
redirect('login.php');
?>
