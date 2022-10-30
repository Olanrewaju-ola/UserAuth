<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);    
}

function registerUser($username, $email, $password){

    $data = array(
    'fullname'=> $username, 
    'email' => $email,
     'password' => $password
    );
    // check if the user exist
    if(checkUserExist($email)){
        echo "User already exist";
    }else{
        //If user does not exist insert the data into the file
        $file = fopen('../storage/users.csv', 'a');
        fputcsv($file, $data);
        fclose($file);
        echo 'User Registered Successfully';
    }
}

    function checkUserExist($email){
        $file = fopen('../storage/users.csv', 'r');
        while(!feof($file)){
            $line = fgetcsv($file);
            if($line[1] == $email){
                return true;
            }
        }
        return false;
    }

