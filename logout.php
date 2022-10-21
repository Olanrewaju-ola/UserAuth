<?php
session_start();

logout($username);

function logout($username){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/

if (isset($_SESSION['username'])){
    session_unset();

    session_destroy();

    header("../login.php");
}

}

echo "HANDLE THIS PAGE";

