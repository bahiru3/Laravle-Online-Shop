
<?php
// Your login page logic and validation

// If the login is successful, redirect to the main page
if ($loginSuccessful) {
    header("Location: main_page.php");
    exit(); // Make sure to exit after redirection
}
?>
<!-- <form method="POST" action="{{ route('login.submit') }}">
    @csrf

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form> -->