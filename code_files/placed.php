
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: logout.php");
    exit();
}?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Placed?</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>placed</title>
  <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous">
  </script>
  

<style>
      
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
  margin-top: 0px;
}
form .input_box{

  height: 40px;
  width: 20%;
  position: relative;
  margin-top: 15px;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
}
.input_box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: 1px solid lightgrey;
  border-radius: 5px;
  text-align: center;
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
  height: 80%;
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
.btn:hover {
    opacity: 1;
  }

  .button {
    width: 100%;
    height: 30px;
    border: none;
    border-radius: 5px;
    padding-top: 2px;
    font-size: large;
    color: white;
    text-align: center;
    background-color: maroon;
  }

.navbar-custom {
    background-color: maroon;
}

.navbar-text {
    color: white;
    margin: 10px;
    text-decoration: none;
}

.navbar-text:hover {
    color: white;
}

.btn-color {
    border-color: white;
    border: 1px solid;
    color: white;
    background-color: maroon;
    margin-left: 10px;
}

.btn-color:hover {
    background: rgb(146, 34, 34,0.5);
    color: white;
}

.toggle-button {
    color: white;
    border: line;
    border-color: white;
    background-color: maroon;
}
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
  }

.carousel-inner .carousel-item {
    transition: transform 0.3s ease; /* Adjust the transition duration as needed */
}  

.para {
  text-align: left;margin-left: 5%;margin-right:5%;color: solid black;font-size: large;padding-bottom: 15px;
}

.heading {
  text-align: center;color: maroon;padding-bottom: 5px;background-color: white;font-size: 30px;
}

.heading a:hover {
    background-color: white;
}

.list {
  margin-left: 5%;margin-right:5%;color: solid black;font-size: large;
}

.scroll {
    font-size: 35px;
    color: maroon;
}

@media screen and (min-width: 601px) {
  .example {
    font-size: 22px;
  }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
  .example {
    font-size: 20px;
  }
  form {
  margin-top: 0px;
}
form .input_box{

  height: 40px;
  width: 50%;
  position: relative;
  margin-top: 15px;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
}
.input_box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: 1px solid lightgrey;
  border-radius: 5px;
  text-align: center;
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
}

a {
  text-decoration: none;
}

.but2:active {
  color: inherit;
}

a:link {
  color: white;
}

a:hover {
  color: rgb(201, 194, 194);
  text-decoration: none;
}

a:visited {
  color: white;
}

.txt {
  font-size: 20px;
  padding-bottom: 0px;
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

 
</style>

</head>

<body>

  <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="https://www.rgukt.ac.in/"><img
        src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/RGUKT-Logo_efpy9y.jpg"
        style="width:40px; height:40px; border-radius:50%;" alt="Logo"></a>
    <button class="navbar-toggler toggle-button" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="navbar-text" href="main.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="userabout.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="company.php">COMPANIES</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="students.php">PLACED STUDENTS</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="placed.php">PLACED?</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="#Contact">CONTACT</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <button class=" btn-color" type="submit"><a href="logout.php">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br>
  
  <form action="checkid.php" method="POST">
    <br>
    <div class="input_box ">
      <input type="text" placeholder="ID Number"  name="id" autocomplete="off">
      <div class="icon"><i class="fas fa-user"></i></div>
    </div>
    <div class="input_box button hover">
      <button class="button">Submit</button>
    </div>
    <center>
    <br>
    <h6>NOTE: Enter the Placed Student ID Only</h6></center>
  </form>
<div class="cursor"></div>
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