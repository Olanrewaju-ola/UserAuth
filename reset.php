<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['password']; //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    
    $file = fopen('../storage/users.csv', 'r');
    while(!feof($file)){
        $data = fgetcsv($file);
        if ($data[1] == $email){
            $data[2] == $password;
            fclose($file);
           $file = fopen('../storage/users.csv', 'w');
           fputcsv($file, $data);
           fclose($file);
           echo 'Password reset successfully';
           exit();
        }
    }

//echo "HANDLE THIS PAGE";
}
