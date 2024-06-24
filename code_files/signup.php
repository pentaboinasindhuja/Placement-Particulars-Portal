<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title> SignUp </title>
    
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

img {
    height: 200px;
    width: 220px;
}

.button {
  width: 100%;
  height: 50px;
  border: none;
  font-size: large;
  color: white;
  background-color: maroon;
}


    </style>
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
     <form action="signupcheck.php" method="post">
<div class="main_div">
    <div class="title">SignUp!</div>
    <form action="#">
      <center><img class="img" src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/RGUKT-Logo_efpy9y.jpg"></center>
        <br>
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <?php if (isset($_GET['name'])) { ?>
            <div class="input_box">
          <input type="text" placeholder="Email " name="name" >
          <div class="icon"><i class="fas fa-envelope"></i></div>
              </div>
               
              <?php echo $_GET['name']; ?><br>
              <?php }else{ ?>
                <div class="input_box">
          <input type="text" placeholder="Email " name="name" >
          <div class="icon"><i class="fas fa-envelope"></i></div>
              </div>
          <?php }?>
          <?php if (isset($_GET['uname'])) { ?>
            <div class="input_box">
        <input type="text" placeholder="ID Number" name="uname" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
              
            <?php echo $_GET['uname']; ?>"><br>
            <?php }else{ ?>
              <div class="input_box">
        <input type="text" placeholder="ID Number"name="uname" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
              
          <?php }?>



          
          
          <div class="input_box">
        <input type="password" placeholder="Password" name="password" required>
        <div class="icon"><i class="fas fa-key"></i></div>
      </div>


      <div class="input_box">
        <input type="password" placeholder="Confirm Password" name="re_password" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
     	
          
      <div class="input_box button hover">
        <!-- <input type="submit" value="SignUp"> -->
        <button class="button">SignUp</button></div>

     	
          <!-- <a href="login.php" class="ca">Already have an account?</a> -->
     </form>
  </div>
</body>
</html>
