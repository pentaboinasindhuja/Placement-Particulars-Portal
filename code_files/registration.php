<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
 
  include('db_conn.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png">
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
        crossorigin="anonymous"></script>


    <style>
        .navbar-custom {
        background-color: maroon;
        }

        .navbar-text {
        color: white;
        margin: 0.5rem;
        text-decoration: none;
        font-size: 1rem;
        }

        .navbar-text:hover {
        color: white;
        }

        .btn {
        border-color: white;
        border: 0.063rem solid;
        color: white;
        background-color: maroon;
        margin-left: 0.5rem;
        }

        .btn:hover {
        background: rgb(146, 34, 34, 0.5);
        color: white;
        text-decoration: none;
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
            transition: transform 0.3s ease;
            /* Adjust the transition duration as needed */
        }

        .para {
            text-align: left;
            margin-left: 5%;
            margin-right: 5%;
            color: solid black;
            font-size: large;
            padding-bottom: 15px;
        }

        .heading {
            text-align: center;
            color: maroon;
            padding-bottom: 5px;
            background-color: white;
            font-size: 30px;
        }

        .heading a:hover {
            background-color: white;
        }

        .list {
            margin-left: 5%;
            margin-right: 5%;
            color: solid black;
            font-size: large;
        }

        body {
            font-family: Calibri, Helvetica, sans-serif;
            align-items: center;
            width: 100%;
            margin-left: auto;
            margin-right: auto;

        }

        .container {
            padding: 50px;
            background-color: rgb(248, 242, 242);

        }

        a {
            text-decoration: none;
        }

        input[type=text],
        input[type=password],
        textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: white;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: rgb(238, 255, 192);
            outline: none;
        }

        div {
            padding: 10px 0;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: grey;
            color: white;
            padding: 16px 20px;
            margin: 18px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        .back_ground {
            width: 50%;
            align-items: center;
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
        <button class="btn" type="submit"><a href="index.php" style="text-decoration: none;">LOGOUT</a></button>
      </form>
    </div>
  </nav>
    <br><br>
    <form action="registered.php" method="POST">
        <div class="container" class="back_ground">

            <center>
                <h1>STUDENT REGISTRATION FORM</h1>
            </center>
            <hr>
            <h2>Personal Details</h2>
            <label> ID NO</label>
            <input type="text" placeholder="ID NO" size="15" name="id" required />
            <label> Student Name </label>
            <input type="text" placeholder="Student Name" name="name" size="15" required />
            <label> Department</label>
            <input type="text" placeholder=" Department" size="15" name="dept" required />
            <label> Passing Year</label>
            <input type="text" placeholder="Passing Year" name="year" size="15" required />
            <h2>Contact Details</h2>
            <label> Contact No.</label>
            <input type="text" placeholder=" Contact No." name="contact" size="15" required />
            <label>Email</label>
            <input type="text" placeholder="Email" size="15" name="email" required />
            <label>LinkedIn</label>
            <input type="text" placeholder="LinkedIn" name="lin" size="15" required />
            <h2>Company Details</h2>
            <label> Company</label>
            <input type="text" placeholder="Company" name="company" size="15" required />
            <label>CTC</label>
            <input type="text" name="ctc" placeholder="CTC" size="15" required />
            <div>
                <h2>
                    <div class="ex">Interview Questions :</div>
                </h2>
                <textarea cols="180" name="exp" rows="10" placeholder="Suggestions" value="Suggestions" required>
      </textarea>
            </div>
            <div>
                <h2>
                    <div class="ex">Experience :</div>
                </h2>
                <textarea cols="180" name="in" rows="10" placeholder="Experience" value="Experience" required
                    class="column">
      </textarea>
            </div>
            <div>
                <h2>
                    <div class="ex">Suggestions :</div>
                </h2>
                <textarea cols="180" name="sug" rows="10" placeholder="Suggestions" value="Suggestions" required>
      </textarea>
            </div>
            <br>

            <!-- <center>
    <button style="width:100px; height:30px; border-radius:5px; margin-right:40px; border-width: 5px; background-color: rgb(19, 185, 19); border-style: none" >SAVE</button>
    </center>
    </form> -->
            <div class="btn-group" style="width:50%">
                <center><button
                        style="width:100px; height:30px; border-radius:5px; margin-right:40px; border-width: 5px; background-color: rgb(19, 185, 19); border-style: none">SAVE</button>
                </center>
            </div>
            <center>
                <!-- <button style="width:100px; height:30px; border-radius:5px; margin-right:40px; border-width: 5px; background-color: rgb(19, 185, 19); border-style: none" >SAVE</button> -->
                <!-- <button style="width:100px; height:30px; border-radius:5px; background-color: rgb(41, 197, 224); border-style: none; text-decoration: none;"><a href="Next.html" style="color: black;">NEXT</a></button> -->
            </center>
        </div>
    </form>
    <br><br>
</body>

</html>