<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}


require_once('db_conn.php');

//$mainid=$searchid
//echo "$searchid";
$query ="SELECT * FROM registration where id=$id";
//$query="select sid from registration r,registration1 s where s.sid=r.sid";
//$query="select * from registration where =sid";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Profile Page</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        * {
            box-sizing: border-box;
            border-radius: 0.25rem;
        }

        body {
          background-color: rgb(248, 242, 242);
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
            padding: 1.25rem;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
            text-align: left;
        }

        @media screen and (max-width: 45rem) {
            .column {
                width: 50%;
            }
        }

        @media screen and (min-width: 45rem) {
            .column {
                width: 50%;
            }
        }
        a {
      text-decoration: none;
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

    .details {
        align-items: center;
    }

    *{
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 10px;
        }


        /* Overwrite default styles of hr */
        hr {
            border: 1px solid maroon;
            margin-bottom: 25px;
        }

        .student_name {
            margin-left: 3px;
            float: left;
        }

        .para {
            color: maroon;
        }

        .para_head {
            color: maroon;
        }

        .box {
          background-color: red;
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
        <button class=" btn" type="submit"><a href="index.php" style="text-decoration: none;">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br>
    <center>
        <?php
    while($row=mysqli_fetch_assoc($result))
   //$row=mysqli_fetch_assoc($result);{}
  {
    ?>

        <table>
            <h2 class="para">Profile Page</h2>
            <br>

            <div class="details">
            <h4 class="para_head">Student Name </h4>
            <div>
                <div  class="row" style="background-color:white;padding-top: 15px; width:75%">
                    <p>
                        <?php echo nl2br($row['name']);?>
                        <!-- <input type="text" class="row" style="width:70%; background-color: #f2f2f2"; placeholder="<?php //echo $row['suggestions'];?>"> -->
                    </p>
                </div>
            </div>
            <br><h4 class="para_head">Email</h4>
            <div>
                <div  class="row" style="background-color:white;padding-top: 15px; width:75%">
                    <p>
                        <?php echo nl2br($row['email']);?>
                        <!-- <input type="text" class="row" style="width:70%; background-color: #f2f2f2"; placeholder="<?php //echo $row['suggestions'];?>"> -->
                    </p>
                </div>
            </div>
            <br><h4 class="para_head">LinkedIn Profile </h4>
            <div>
                <div  class="row" style="background-color:white;padding-top: 15px; width:75%">
                    <?php $linked = $row['linkdin'];?>
                    <p><a href="<?php echo $linked?>" style="color:blue;">Linkedin Profile</a></p>
                </div>
            </div>
            <br>
            <h4 class="para_head">Interview Questions </h4>
            <div>
                <div  class="row" style="background-color:white;padding-top: 15px;text-align:left; width:75%">
                    <p>
                        <?php echo nl2br($row['interview questions']);?>
                        <!-- <input type="text" class="row" style="width:70%; background-color: #f2f2f2"; placeholder="<?php //echo $row['suggestions'];?>"> -->
                    </p>
                </div>
            </div>
            <br>
                <h4 class="para_head">Experience</h4>
                <div>
                    <div class="row" style="background-color:white;padding-top: 15px;text-align:left; width:75%">
                        <p>
                            <?php echo nl2br($row['experience']);?>
                            <!-- <input type="text" class="row" style="width:70%; background-color: #f2f2f2" placeholder="<?php //echo $row['experience'];?>"> -->
                        </p>
                    </div>
                </div>
                <br>
                    <h4 class="para_head">Suggestions</h4>
                    <div>
                        <div class="row" style="background-color:white;padding-top: 15px;text-align:left; width:75%">
                            <p>
                                <?php echo nl2br($row['suggestions']);?>
                            </p>
                            <?php// echo $row['interview questions'];?>
                        </div>
                    </div>
                    <div><br>
                <br>
                <br
                >
                <br>
                </div>
                </div>
        </table>
        <br>
        <br> <br><br>
        <?php
        
}
?>
    </center>
    <br><br> <br><br>
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