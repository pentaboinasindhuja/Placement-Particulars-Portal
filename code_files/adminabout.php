<?php
// session_start();

// if (!isset($_SESSION['user'])) {
//     header("Location: logout.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon"
    href="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/Logonew_feypnl.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
      padding-bottom: 1rem;
    }

    .heading {
      text-align: center;
      color: maroon;
      padding-bottom: 0.25rem;
      padding-top: 0;
      margin-top: 0;
      background-color: white;
      font-size: 2rem;
    }

    .heading a:hover {
      background-color: white;
    }

    .list {
      margin-left: 5%;
      margin-right: 5%;
      color: solid black;
      font-size: 1rem;
    }

    .scroll {
      font-size: 2.0rem;
      color: maroon;
      height: 3rem;
    }

    .footer {
      text-align: center;
      font-size: 1.25rem;
      background-color: maroon;
      color: white;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .footer-heading {
      font-size: 2.0rem;
    }

    .image {
      height: 80%;
      width: 80%;
    }


    @media screen and (min-width: 45rem) {

      .heading {
        text-align: center;
        color: maroon;
        padding-bottom: 0.25rem;
        padding-top: 0;
        margin-top: 0;
        background-color: white;
        font-size: 2rem;
      }

      .para {
        text-align: left;
        margin-left: 5%;
        margin-right: 5%;
        color: solid black;
        font-size: 1.313rem;
        padding-bottom: 1rem;
      }

      .footer {
        text-align: center;
        font-size: 1.25rem;
        background-color: maroon;
        color: white;
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .footer-heading {
        font-size: 2.0rem;
      }

      .scroll {
        font-size: 2.0rem;
        color: maroon;
      }

      .list {
        margin-left: 5%;
        margin-right: 5%;
        color: solid black;
        font-size: 1rem;
      }

      .navbar-text {
        color: white;
        margin: 0.5rem;
        text-decoration: none;
        font-size: 1rem;
      }

    }

    /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
    @media screen and (max-width: 45rem) {

      .heading {
        text-align: center;
        color: maroon;
        padding-bottom: 0.25rem;
        padding-top: 0;
        margin-top: 0;
        background-color: white;
        font-size: 1.5rem;
      }

      .para {
        text-align: left;
        margin-left: 5%;
        margin-right: 5%;
        color: solid black;
        font-size: 1rem;
        padding-bottom: 1rem;
      }

      .footer {
        text-align: center;
        font-size: 1rem;
        background-color: maroon;
        color: white;
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .footer-heading {
        font-size: 1.5rem;
      }

      .scroll {
        font-size: 5.0rem;
        color: maroon;
      }

      .list {
        margin-left: 5%;
        margin-right: 5%;
        color: solid black;
        font-size: 1rem;
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
      text-decoration: underline;
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
          <a class="navbar-text" href="adminHome.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="adminabout.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="adminCompany.php">COMPANIES</a>
        </li>
        <li class="nav-item">
          <a class="navbar-text" href="adminStudents.php">PLACED STUDENTS</a>
        </li>
        
        <li class="nav-item">
          <a class="navbar-text" href="#Contact">CONTACT</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class=" btn" type="submit"><a href="logout.php" style="text-decoration: none;">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br>
  <h1 style="text-align: center;" id="About">ABOUT</h1>
  <h3 class="heading"><u><a style="color: maroon;" href="https://www.rgukt.ac.in/cse.html">Department of Computer
        Science and Engineering</a></u></h3>
  <p class="para">Established in the year 2010 and provides a comprehensive research environment complemented by
    excellence in teaching. Has a number of qualified teachers who encourage the students to get engaged in several
    extra-curricular and co-curricular activities for them to be successful engineers. Aims to bring up students as
    engineers; helping them to build, strong technical acumen, and harness their skills and talents through several
    cutting-edge technologies and state-of-the-art techniques. Focus on research and development activities, foster
    innovative ideas Paper Publications and Awards. Focus on holistic development of the staff and students through
    extra-curricular and co-curricular activities</p>
  <h3 class="heading">Vision</h3>
  <p class="para">To be a globally recognized centre for excellence in the arena of Computer Science & Engineering
    education and research, catering to the current needs of industry and the society by producing globally competent
    and quality computer professionals.</p>
  <h3 class="heading">Mission</h3>
  <ol class="para">
    <li>To produce Computer Science graduates with sound subject knowledge, certified skill-sets and to foster leading
      edge in the fast changing field who can address current professional challenges</li>
    <li>To enhance and strengthen department interaction with Multi National Companies to be abreast with growing
      technological advancements by facilitating the students to work with recent tools and technologies</li>
    <li>To inculcate professional behavior and leadership abilities in the young minds to implant commitment as work
      culture for the progress of the nation, by producing computer science graduates with high levels of ethical,
      moral, human values and serving the society with highest regard to the mother land</li>
    <li>To provide practical exposure in the various domain areas and undertake research and development activities in
      those areas</li>
    <li>To develop entrepreneurship and managerial abilities through world-class engineering and management education
    </li>
  </ol>
  <h3 class="heading">Objective</h3>
  <p class="para">The primary objective of this website is to create a centralized platform for efficiently storing
    and organizing comprehensive data of students who have secured placements. By consolidating this vital information
    in one easily accessible location, aims to streamline the process of tracking and managing placement details. This
    platform will enable effective data management, facilitate quick retrieval of student records, and provide
    valuable insights into college's placement success. Additionally, it will serve as a valuable resource for
    placement seekers.</p>

  <!--
  <h3 class="heading">Placement Process at RGUKT Basar</h3>
  <p class="para">The campus placement process at Rajiv Gandhi University of Knowledge Technologies (RGUKT) Basar is a
    comprehensive and well-structured endeavor aimed at preparing students for their transition from academia to the
    professional realm. It commences with rigorous training sessions that equip students with essential technical
    skills, soft skills, and aptitude necessary for success during placements. The placement cell actively engages
    with a wide array of companies, inviting them to the campus for recruitment drives. Through pre-placement talks,
    students gain valuable insights into the participating companies, their organizational culture, job roles, and
    growth prospects. The selection process typically involves multiple stages, including written tests, technical
    interviews, group discussions, and personal interviews, tailored to meet the requirements of each company.
    Successful candidates are presented with offer letters, marking the beginning of their professional journey. The
    university's placement cell plays a pivotal role in facilitating this process, ensuring a seamless transition for
    students into the workforce. For the most up-to-date and precise information regarding the campus placement
    process at RGUKT Basar, students are encouraged to refer to official university channels and engage with the
    placement cell.</p>
    -->

  <h3 class="heading">Our Placement Partners</h3>
  <center>
    <img
      src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1700582365/IMG-20231121-WA0022-removebg-preview_qq4ks7.png"
      class="image" alt="Our Placement Partners">
  </center>
  <p class="para">Every year, Rajiv Gandhi University of Knowledge Technologies (RGUKT) Basar witnesses a dynamic and
    diverse array
    of companies participating in its placement drives. These companies span various industries, including technology,
    finance, engineering, and more. Renowned multinational corporations, as well as innovative startups, actively seek
    out talented individuals from RGUKT for their workforce. The placement process typically includes companies
    conducting on-campus recruitment drives, interviews, and assessments to identify and hire the most promising
    candidates. This not only provides valuable opportunities for the students but also reflects the university's
    commitment to fostering strong industry-academic connections. The companies that participate often represent the
    forefront of their respective fields, ensuring that RGUKT students are exposed to a wide range of career options and
    growth opportunities.</p>

</body>

<footer id="Contact" class="footer">
  <h2 class="footer-heading">CONTACT</h2>
  <i class="fas fa-map-marker-alt"></i> &nbsp
  HoD <br> Computer Science Engineering<br>
  RGUKT Basar<br>
  Nirmal, Telangana<br>
  PIN: 504107 <br>
  <i class="fas fa-envelope"></i> &nbsp <a href="mailto: hod.cse@rgukt.ac.in"
    style="color: white;">hod.cse@rgukt.ac.in</a>
</footer>

</html>