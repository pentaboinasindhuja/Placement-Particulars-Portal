<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
<?php
//session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);

    //$user_data = 'uname=' . $uname . '&name=' . $name;
    function validatePassword($password)
{
    // Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and have a minimum length of 8 characters
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return false;
    }

    return true;
}
     if (!validatePassword($pass)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and have a minimum length of 8 characters',
            }).then(function() {
                window.location.href = 'signup.php?';
            });
          </script>";
        exit();
    }



    if (empty($uname)) {
       // header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($pass)) {
        //header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is required&");
        exit();
    } else if (empty($name)) {
       // header("Location: signup.php?error=Name is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
      // header("Location: signup.php?error=The confirmation password  does not match&$user_data");
      echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Password not Matched',
            }).then(function() {
                window.location.href = 'signup.php?';
            });
          </script>";
        exit();
    }
    else if(!filter_var($name,FILTER_VALIDATE_EMAIL)){
		// header("Location: signup.php?success= Invalid Email");
	  
        // exit();
	 echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'invalid email enter valid email!.',
            }).then(function() {
                window.location.href = 'signup.php?';
            });
          </script>";
        exit();
    }
	else if(!preg_match("/^[bB]\d{6}$/i",$uname))
	{
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'enter valid id use captial letters incase of B',
            }).then(function() {
                window.location.href = 'signup.php?';
            });
          </script>";
        exit();
	}




     else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM login WHERE user_name='$uname' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //header("Location: signup.php?error=The username is taken try another&$user_data");
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Account Already Exist',
            }).then(function() {
                window.location.href = 'signup.php?';
            });
          </script>";
            exit();
        } else {
            $sql2 = "INSERT INTO login(user_name, password, name) VALUES('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                // SweetAlert success message
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Your account has been created successfully',
                        }).then(function() {
                            window.location.href = 'login.php';
                        });
                      </script>";
                exit();
            } else {
                // SweetAlert error message
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Unknown error occurred',
                        }).then(function() {
                            window.location.href = 'signup.php?';
                        });
                      </script>";
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
?>
</body>
</html>