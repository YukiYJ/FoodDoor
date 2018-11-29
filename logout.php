<?php
session_start();
session_unset();
// remove all session variables
session_destroy();
echo "Log out successfully!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- refresh after 2 second -->
    <meta http-equiv="refresh" content="1;url=index.php">
    <title>Logout...</title>
</head>