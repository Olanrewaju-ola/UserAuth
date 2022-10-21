<?php  session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data = [$email, $password];

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
        echo $data[0]. " ". $data[1]. " ".$data[2]. "<br>";
        if ($email === $_POST['email'] && $password == $_POST['password']){
            $_SESSION['$username'] == $email;
            header("../dashboard.php");
        }
        else{
            session_unset();
            header('../register.php');
        } 
}
fclose($file);

//echo "HANDLE THIS PAGE";

}