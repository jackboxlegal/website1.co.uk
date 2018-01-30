<?php
session_start();

// these are here to define the variables
$username =  'admin@company.co.uk';
$password = '123';

$customerUsername =  'customer@company.co.uk';
$customerPassword = '123';

// check
if (isset($_POST['email']) && isset($_POST['password']))
{
    // if the POST username is equal to the $username and POST password
    // is equal to $password
    if($_POST['email'] == $username && $_POST['password'] === $password)
    {
        $_SESSION['logged_in'] = true;
        // redirect to location admin/admin_area.html
        header ('Location: admin/');
        // leaves the session.
        exit;

    }
    // if the POST username is equal to variable $sUsername and POST password
    // is equal to variable $sPassword
    if($_POST['email'] == $customerUsername && $_POST['password'] === $customerPassword)
    {
        // is session logged in equal to true.
        $_SESSION['customer_logged_in'] = true;
        // redirect the student to student/student_index.html
        header ('Location: customer/');
        // leaves the session.
        exit;
    }
    // otherwise
    else
    {
        // redirect to the login page. If the password and username are not present the user shouldn't be able to access anywhere.
        header ('Location: /');
        exit;
    }
}
// otherwise
else
{
    // print ot screen "Username and Password variables not found!"
    echo "Username and Password variables not found!";
    exit;
}
