<?php
// Starts a new or resumes an existing session
session_start();

// Variables sUsername and sPassword
$customerUsername =  'customer@company.co.uk';
$customerPassword = '123';

// if the session is not set to student_logged_in  OR  the session is equal to true
// student_logged_in is a variable we created to check if the session is logged in
if ((isset($_SESSION['customer_logged_in']) && $_SESSION['customer_logged_in'] == true)) {

}
// else
else {
    // send to index.php (login page)
    header("Location: ../index.php");
    exit;
}

?>
