<?php  
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */

    $file = fopen('../storage/users.csv', 'r');
    while(!feof($file)){
        $data = fgetcsv($file);
        if ($data[1] == $email && $data[2] == $password){
            $_SESSION['username'] == $data[0];
            header("Location: ../dashboard.php");
            exit;
        }
        
}
        echo "Invalid Username or Password";
    fclose($file);

//echo "HANDLE THIS PAGE";
}