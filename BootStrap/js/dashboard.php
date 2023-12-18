
<?php
session_start();

// Check if user is logged in, else redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Display dashboard content
echo "Welcome to the dashboard, " . $_SESSION['username'] . "!";
?>

