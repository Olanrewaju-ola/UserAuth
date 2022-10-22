<?php

logout($username);

function logout($username){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_start();

if ($_SESSION){
    
        session_destroy();

        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php?error=You are not logged in");
        exit;
    }

}

//echo "HANDLE THIS PAGE";

