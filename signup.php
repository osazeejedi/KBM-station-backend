<?php
// localhost name
// username
// password
// db name

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', null);
define('DB_NAME', 'KBM');

header('Access-Control-Allow-Origin: *');

try {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
} catch (\Exception $th) {
    print ($th);
    
}

// if($conn -> successful) {
//     echo "signup";
// }

if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
} else {
    $fullName = $_POST['fullName'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword    = $_POST['confirmPassword'];

    $sql = "INSERT INTO signup(fullName, email, password, confirmPassword) VALUES('$fullName', '$email', '$password', '$confirmPassword');";
    $res = mysqli_query($conn, $sql);

    if($res) {
        echo "Success";
    } else {
        echo "Error";
    }
    $conn -> close();

}


?>