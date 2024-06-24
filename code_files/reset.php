<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>


<?php include('db_conn.php');
session_start();
$id = $_GET['MnoQtyPXZORTE'];
$message = $Home = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forgot.php");
}
else
{
//if(isset($_POST['submit'])) {
//	$password = $_POST['password'];
//	$Repassword = $_POST['Repassword'];



    if (isset($_POST['password']) && isset($_POST['Repassword'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $password = validate($_POST['password']);
    $Repassword = validate($_POST['Repassword']);
  
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
if (!validatePassword($password)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and have a minimum length of 8 characters',
            }).then(function() {
                window.location.href = 'reset.php?';
            });
          </script>";
        exit();
    }



  

	else if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Password Not Match..!!</div>";
	}
	else{
	$id_decode = base64_decode($id);
  $Repassword = md5($Repassword);
	$query = "UPDATE users SET password = '$Repassword' WHERE id = '$id_decode' ";
	$result = $conn->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Reset Your Password Successfully..</div>";
			$Home = "<a href='login.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		$message = "<div class='alert alert-danger'>Failed to Reset Password..!!</div>";
	}
	}
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Change Password </title>
    
    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
  }
  html,body{
    display: grid;
    height: 100vh;
    place-items:center;
    background: maroon;
  }
  .main_div{
    width: 500px;
    background: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
  }
  
  .main_div .title{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
  }
  .main_div .social_icons{
    margin-top: 20px;
    display: flex;
    justify-content: center;
  }
  
  form {
    margin-top: 25px;
  }
  form .input_box{
    height: 50px;
    width: 100%;
    position: relative;
    margin-top: 15px;
  }
  .input_box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid lightgrey;
    border-radius: 5px;
    padding-left: 45px;
    font-size: 17px;
    transition: all 0.3s ease;
  }
  .input_box input:focus{
    border-color: maroon;
  }
  .input_box .icon{
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);
    color: grey;
  }
  form .option_div{
    margin-top: 5px;
    display: flex;
    justify-content: space-between;
  }
  .option_div .check_box{
    display: flex;
    align-items: center;
  }
  .option_div span{
    margin-left: 5px;
    font-size: 16px;
    color: #333;
  }
  .option_div .forget_div a{
    font-size: 16px;
    color: maroon;
  }
  .button input{
    padding-left: 0;
    background: maroon;
    color: #fff;
    border: none;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s linear;
  }
  .button input:hover{
    background: maroon;
  }
  form .sign_up{
    text-align: center;
    margin-top: 25px;
  }
  .sign_up a{
    color: maroon;
  }
  form a{
    text-decoration: none;
  }
  form a:hover{
    text-decoration: underline;
  }
  .btn:hover {
      opacity: 1;
    }
  
    .button {
      width: 100%;
      height: 50px;
      border: none;
      font-size: large;
      color: white;
      background-color: maroon;
    }
  
  .text {
    padding-top: 30px;
    text-align: center;
  }
  
  .text-link {
      color: maroon;
  }
    </style>
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
    <div class="main_div">
    <div class="title">Change Password</div>
    <form action="#" method="POST">
        <?php echo $message; ?>
      <center><img class="img" src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/RGUKT-Logo_efpy9y.jpg"></center>
        <br>
      <div class="input_box">
        <input type="password" name="password" placeholder="New Password" required>
        <div class="icon"><i class="fas fa-key"></i></div>
      </div>
      <div class="input_box">
        <input type="password" name="Repassword" placeholder="Confirm Password" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      <div class="input_box button hover">
        <!-- <input type="submit" value="SignUp"> -->
        <button type="submit" name="submit">Reset Password</button> <?php echo $Home; ?>
      </div>
    </form>
  </div>
  
</body>
</html>