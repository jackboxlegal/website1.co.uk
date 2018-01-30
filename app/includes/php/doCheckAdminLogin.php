<?php
// Starts a new or resumes an existing session
session_start();

// Variables Username and Password
$username =  'admin@company.co.uk';
$password = '123';

// if the session is not set to logged_in  OR  the session is equal to true
// logged_in is a variable we created to check if the session is logged in
if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)) {

}
// else
else {
    // send to index.php (login page)
    header("Location: ../index.php");
    exit;
}
?>