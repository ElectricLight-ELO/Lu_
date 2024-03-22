<?php
session_start();

// Read the users.txt file
$users = file('users.txt', FILE_IGNORE_NEW_LINES);

$found = false;
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match
foreach ($users as $user) {
    list($login, $pass) = explode(':', $user);
    if ($username === $login && $password === $pass) {
        $found = true;
        break;
    }
}

if ($found) {
    // Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header("Location: account.html");
} else {
    echo "Incorrect username or password";
}
?>