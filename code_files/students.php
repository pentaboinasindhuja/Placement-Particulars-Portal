<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: logout.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placed Students</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                    <a class="navbar-text" href="main.php">HOME<span class="sr-only">(current)</span></a>
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
                <button class="btn" type="submit"><a href="logout.php"
                        style="text-decoration: none;">LOGOUT</a></button>
            </form>
        </div>
    </nav>
    <br>

    <center>
        <h1 class="student example-heading">Placed Students List</h1>
    </center>
    <!-- <input type="text" id="searchInput" placeholder="Enter Student Name" onkeyup="searchStudent()" class="student_name">
    <button onclick="clearSearch()" class="btn">Clear Search</button>
    <br><br> -->
    <table id="example" class="table example">
        <!-- id="studentTable" -->
        <thead>
            <tr>
                <th>SNO</th>
                <th>ID</th>
                <th>Student Name</th>
                <th>Department</th>
                <th>Year of Passing</th>
                <th>Company</th>
                <th>CTC</th>
                <th>Profile</th>
            </tr>
        </thead>

        <?php
        //sssession_start();
                
        include "db_conn.php";

               // $sql = "SELECT id,sid,name,dept,year,company,ctc FROM registration";
               $sql = "SELECT id, sid, name, dept, year, company, ctc FROM registration ORDER BY sid DESC";
                $result=$conn->query($sql);
                if($result->num_rows > 0)
                {
                   $s=0;
                    while($row = $result->fetch_assoc())
                    {
                        $s++;
                        echo "<tr>";
                        echo "<td>".$s."</td><td>".$row["sid"]."</td><td>".$row["name"]."</td><td>".
                        $row["dept"]."</td><td>".$row["year"]."</td><td>".$row["company"]."</td><td>".
                        $row["ctc"]."</td>";
                        echo '<td><a href="viewmore.php?id='.$row["id"].'" style="color:blue;">ViewMore</a></td>';
                        echo "</tr>";
                    } 
                        echo "</table>";
                }
                else
                {
                    echo "No data Found in Database";
                }
                $conn->close();
            ?>
        <tbody>
            <!-- Student data will be inserted here -->
        </tbody>
    </table>
    <style>
        /* Add your CSS styles here */

        .navbar-custom {
            background-color: maroon;
            position: relative;
            z-index: 1;
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
            width: 90%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
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

        .student_name {
            height: 25px;
            width: 200px;
            padding: 3px;
            margin-bottom: 14px;
            margin-right: 18px;
            border-style: none;
            border: 2px solid black;
            font-size: 15px;
        }

        .student {
            color: maroon;
            font-size: 50px;
        }

        .table th {
            background-color: maroon;
            color: white;
        }

        @media screen and (min-width: 45rem) {
            .example {
                font-size: 20px;
            }

            .example-heading {
                font-size: 2rem;
            }

            .logout {
                height: 30px;
                width: 100px;
                padding: 4px;
                margin-bottom: 14px;
                margin-right: 18px;
                border-style: none;
                font-size: 15px;
                color: white;
                background-color: green;
                border-radius: 8px;
            }

            .navbar-text {
                color: white;
                margin: 0.5rem;
                text-decoration: none;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 45rem) {
            .example {
                font-size: 8px;
            }

            .example-heading {
                font-size: 20px;
            }

            .logout {
                height: 20px;
                width: 70px;
                padding: 0px;
                margin-bottom: 0px;
                margin-right: 0px;
                border-style: none;
                font-size: 15px;
                color: white;
                background-color: green;
                border-radius: 8px;
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
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