
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Store user information in database or file
    // ... Your database or file storage code here ...
    
    // If registration is successful, redirect to login page
    // For now, assuming registration is successful:
    header("Location: index.php");
    exit();
}
?>

