<?php
session_start();

 if (!isset($_SESSION['user'])) {
    header("Location: logout.php");
     exit();
}

 ?>
<?php

// Database connection details
$db_host = "localhost:3307";
$db_user = "root";
$db_pass = "";
$db_name = "test";



$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//include('d.php');

// Fetch the uploaded files from the database
$sql = "SELECT * FROM yearpdfs";
$result = $conn->query($sql);

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Company Information</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
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
        /* Add your CSS styles here */
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

    .logout {
        height: 2rem;
        border-radius: 0.2rem;
      border-color: white;
      border: 0.063rem solid;
      color: white;
      background-color: maroon;
      margin-left: 0.5rem;
    }

    .logout:hover {
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
        table {
            border-collapse: collapse;
            width: 60%;
            margin-top: 2rem;
        }

        @media screen and (max-width: 45rem) {
            table {
                border-collapse: collapse;
                width: 80%;
                margin-top: 2rem;
            }

        }

        th,
        td {
            border: 0.063rem solid black;
            text-align: center;
        }

        th {
            background-color: maroon;
            height: 3rem;
            color: white;
            align-items: center;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .mahi {
            color: green;
        }

        .btn {
            height: 2rem;
            width: 6rem;
            padding: 0.25rem;
            margin-bottom: 0.5rem;
            margin-top: 0.5rem;
            margin-right: 1rem;
            border-style: none;
            font-size: 1rem;
            color: white;
            background-color: rgb(40, 115, 226);
            border-radius: 0.5rem;
        }

        .student_name {
            height: 1.5rem;
            width: 12rem;
            padding: 0.25rem;
            margin-bottom: 1rem;
            margin-right: 1rem;
            border-style: none;
            border: 0.126rem solid black;
            font-size: 1.2rem;
        }

        .student {
            color: maroon;
            text-decoration: none;

        }

        .title {
            height: 4rem;
        }

        .back {
            width: 6rem;
            height: 2rem;
            border-radius: 0.25rem;
            margin-right: 2.5rem;
            background-color: rgb(19, 185, 19);
            color: black;
            border: none;

        }

        a {
            text-decoration: none;
        }

        a:link {
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        a:visited {
            color: white;
        }

        .table th {
            background-color: maroon;
            color: white;
        }

        .para {
        text-align: left;
        margin-left: 5%;
        margin-right: 5%;
        color: solid black;
        font-size: 1rem;
        padding-bottom: 1rem;
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
        <button class="logout" type="submit"><a href="logout.php" style="text-decoration: none;">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br>

  <div>
    <center>
    <p class="para"> 
        For Computer Science and Engineering (CSE) students at RGUKT Basar, the participating companies in campus placements often target candidates with technical skills relevant to the field of computer science. The types of roles offered by these companies may include software development, programming, data analysis, and various other positions related to information technology. Here are some common types of companies that often recruit CSE students:<br>

    
    </p>
        <h1 class="student">COMPANIES</h1>
    </center>
    <!-- <input type="text" id="searchInput" placeholder="Enter company Name" onkeyup="searchStudent()" class="student_name"> -->
    <!-- <button onclick="clearSearch()" class="btn">Clear Search</button> -->
    <!-- <br><br> -->
    <center>
        <table id="studentTable">
            <thead>
                <tr class="title">
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Job Description</th>
                   <!-- <th>Details</th>-->

                </tr>
            </thead>
            <tbody>
                <!-- Student data will be inserted here -->
                <?php
            // Display the uploaded files and download links
            if ($result->num_rows > 0) 
            {
                $s = 0;

                while ($row = $result->fetch_assoc()) 
                {   
                    
                    $s++;

                    $file_path = "uploads/" . $row['job_desc'];
                    $company_name = $row['name'];

                   
                    ?>
                    <tr>
                        <td><?php echo $s; ?></td>
                        <td><?php echo $company_name; ?></td>
                        <td><a href="<?php echo $file_path; ?>" class="btn" download>Download</a></td>
                        <!-- <td><a href="companyprofile.php?id='.$row["sno"].'" style="color:blue;">ViewMore</a></td>-->
                      <!--  <td><a href="check1.php?sno=<?php echo $row['sno']; ?>" style="color: blue;">View More</a></td> -->
                    </tr>
                    <?php
                }

            } 
            else 
            {
                ?>
                <tr>
                    <td colspan="4">No files uploaded yet.</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <br><br><br><br><br>
    </center>
    
    </div>
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