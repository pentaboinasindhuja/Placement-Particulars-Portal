<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title> Login </title>
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
  .navbar-text {
      /* color: rgb(61, 36, 128); */
      margin: 0.5rem;
      text-decoration: none;
      font-size: 1rem;
      /* Apply cursor styling */
    position: relative;
      /* cursor: pointer; */
      overflow: visible;
    }

    /* Add cursor element for navigation links */
    .navbar-text::before {
  content: "";
  position: absolute;
  width: 50%;
  height: 50%;
  background-color: rgba(255, 255, 255, 0); /* Adjust opacity as needed */
  top: 10px;
  down:10px;
  left: 10px;
  right:10px;
  z-index: -1;
  transition: transform 0.3s ease, background-color 0.3s ease; /* Add transition for background-color */
  border-radius: 400px; /* Adjust border radius as needed */
}

.navbar-text:hover::before {
  background-color: rgba(255, 255, 255, 0.2); /* Show highlight on hover */
  transform: scale(3); /* Adjust scale as needed */
}

  </style>

</head>
<body>
<div class="cursor"></div>
  <?php
  session_start();
  if(isset($_SESSION['error'])){
    if($_SESSION['error']!=null){
      //echo "<div>InvaLid paddword</div>";
    }

  } 
  session_destroy();
 

  ?>
     <form action="process1.php" method="post">

     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <div class="main_div">
    <div class="title">To know more about Placement Particulars</div>
    <form action="#">
      <center><img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4GVr2QnVnWA0gjSM5R_POamQECiJE7OIJ9A23Mc-9&s"></center>
        <br>
      <div class="input_box">
        <input type="text" placeholder="ID Number" name="uname" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box">
        <input type="password" placeholder="Password" name="password" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      
		<div class="input_box button hover">
        <button class="button">Login</button>
      </div>
      
      <div class="text" >
        <a class="text-link" href="forgot.php">
        Forgot Password? 
        </a>
      </div>
      <div class="text">
        Not Registered? <a href="signup.php" class="text-link">Create Account</a>
      </div>
   
     </form>
     
<script>

  const cursor = document.querySelector('.cursor');
  
  document.addEventListener('mousemove', e => {
      cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
  })
  
  document.addEventListener('click', () => {
      cursor.classList.add("expand");
  
      setTimeout(() => {
          cursor.classList.remove("expand");
      }, 500)
  })
      </script>
</body>
</html>