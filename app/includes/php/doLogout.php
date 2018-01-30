<?PHP
// Starts a new or resumes an existing session
session_start();
//destroys all data registered to a session
session_destroy();
// send to login page
header ('Location: ../index.php ');
?>


