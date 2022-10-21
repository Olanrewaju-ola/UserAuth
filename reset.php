<?php
if(isset($_POST['submit_email']) && $_POST['email']){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['newpassword']; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    
    $file = fopen('../storage/users.csv', 'r');
    $data = fgetcsv($file);
    echo $data[0]. " ". $data[1]. " ".$data[2]. "<br>";
    if ($username == $_POST['fullname']){
        echo 'enter a new password';
        $password == $newpassword;
    }
    else
    echo 'User does not exist';

    //if it does, replace the password
   
}
//echo "HANDLE THIS PAGE";


