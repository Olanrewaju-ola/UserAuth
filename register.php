<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);    
}

function registerUser($username, $email, $password){
       
// read the content of the file and print it out
$data = [$username, $email, $password];
$file = fopen('../storage/users.csv', 'ar+');
while(!feof($file)){
    $data = fgetcsv($file);
    echo $data[0]. " ". $data[1]. " ".$data[2]. "<br>";
    if ($email === $_POST['email'] && $password === $_POST['password']){
        echo"user already exist";
        exit;
        } 
    else{
        fputcsv($file, $data);
        echo "User registered successfully";
}

}

}