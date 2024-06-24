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
$message = $link = '';
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$query = "SELECT * FROM login WHERE name = '".$name."'";
	$result = $conn->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$id = $row['id'];
		$id_encode = base64_encode($id);
    	$link = "<a href='reset.php?MnoQtyPXZORTE=$id_encode' class='btn btn-info btn-sm'>set</a>";
   // header("location:Reset_pass.php");
	
	}
	}else{
         echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'invalid email',
            }).then(function() {
                window.location.href = 'forgot.php?';
            });
          </script>";
        exit();
		//$message = "<div class='alert alert-danger'>Invalid Email..!!</div>";
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
    <div class="title">Forgot Password</div>
    <form method="POST" >
    <?php //echo $message; ?>
      <center><img class="img" src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/RGUKT-Logo_efpy9y.jpg"></center>
        <br>
      <div class="input_box">
        <input type="email" name="name" placeholder="Email" required>
        <div class="icon"><i class="fas fa-envelope"></i></div>
      </div>
      <div class="input_box button hover">
        <!-- <input type="submit" value="SignUp"> -->
        <button class="button" name="submit" type="submit">Reset</button>
      </div>
      <!-- <input type="submit" value="SignUp">< -->
    
      <?php echo $link;?>
    </form>
  </div>
  
</body>
</html>