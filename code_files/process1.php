<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php 
session_set_cookie_params(3600);
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    
    $adminUsername = 'admin';
$adminPassword = 'rgukt123';


	
if ($uname === $adminUsername && $pass === $adminPassword) {
    // Authentication successful
    $_SESSION['admin'] = true;
    echo "<script>
        swal({
            title: 'Welcome Admin!',
            text: 'You have successfully logged in as an admin.',
            icon: 'success',
        }).then(() => {
            window.location.href = 'adminHome.php'; 
        });
    </script>";
    exit();
}


    if (empty($uname)) {
        echo "<script>swal('Error', 'User Name is required', 'error').then(() => { window.location.href = 'login.php'; });</script>";
        exit();
    } else if (empty($pass)){
        echo "<script>swal('Error', 'Password is required', 'error').then(() => { window.location.href = 'login.php'; });</script>";
        exit();
    } else {
        // hashing the password
        $pass = md5($pass);
        //$pass = '900150983cd24fb0d6963f7d28e17f72';

        $sql = "SELECT * FROM login WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['user']=true;
                echo "<script>
                swal('Welcome', 'Thank you for Visiting This Website', 'success').
                then(() => { window.location.href = 'main.php'; });
                </script>";
               // header("Location: main.php");
                exit();
            } else {
                echo "<script>swal('Error', 'Incorrect User name or password', 'error').then(() => { window.location.href = 'login.php'; });</script>";
                exit();
            }
        } else {
            //$_SESSION['error'] = 'error';
            echo "<script>swal('Try Again', 'Incorrect User name or password', 'error').then(() => { window.location.href = 'login.php'; });</script>";
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
</body>
<html>
