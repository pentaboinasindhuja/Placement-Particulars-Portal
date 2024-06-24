<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+sans:wght@400;700&display=swap">
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
        integrity="sha384-cVKIPhGWiC2Al4"></script>
    <title>Start Page</title>

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
            height: 2rem;
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
            padding: 0;
            margin: 0;
        }

        .container {
            padding: 26px;
            font-family: 'Roboto';
            font-size: 18px;
            font-weight: 300;
            line-height: 24px;
        }

        .container p {
            margin-bottom: 15px;
        }

        .thumbanail {
            width: 350px;
            position: relative;
            box-shadow: 0 0 5px rgba(0, 0, 0, .4);
            background-color: #fff;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .thumbanail::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 8px solid #fff;
            z-index: 2;
            overflow: hidden;
            box-sizing: border-box;
        }

        .thumbanail img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transform: scale(1) rotate(0deg);
            transition: all .5s linear;


        }

        .thumbanail.hover img {
            transform: scale(1.1) rotate(-5deg);

        }

        .thumbanail.right {
            float: right;
            margin-left: 20px;
        }

        .thumbanail.left {
            float: left;
            margin-right: 20px;
        }

        @media screen and (max-width:45rem) {
            .thumbanail.right {
                float: none;
                margin-left: 0px;
            }

            .thumbanail.left {
                float: none;
                margin-right: 0px;
            }

            .thumbanail {
                width: 100%;
            }

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
                font-size: 1rem;
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

        .btn-color {
            border-color: white;
            border: 0.063rem solid;
            color: white;
            background-color: maroon;
            margin-left: 1rem;
            width: 4rem;
            border-radius: 0.2rem;
        }

        .btn-color:hover {
            background: rgb(146, 34, 34, 0.5);
            color: white;
            text-decoration: none;
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

        h1 {
            color: maroon;
        }
    </style>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="https://www.rgukt.ac.in/"><img
                src="https://res.cloudinary.com/dl1r4zjmq/image/upload/v1696778933/RGUKT-Logo_efpy9y.jpg"
                style="width:40px; height:40px; border-radius:50%;" alt="Logo"></a>


        <form class="form-inline my-6 my-lg-0 ml-auto">
                <button class="btn-color" type="submit"><a href="login.php">LOGIN</a></button>

            </form>
<!--
        <button class="navbar-toggler toggle-button" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-6 my-lg-0 ml-auto">
                <button class="btn-color" type="submit"><a href="login.php">LOGIN</a></button>

            </form>
        </div>

        -->
    </nav>

    <div class="container">
        <div class="thumbanail right">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700754184/slide_19_hlzr2c.jpg" alt="" />
        </div>
        <h1>Admissions</h1>
        <p>
            The admission criteria for Rajiv Gandhi University of Knowledge Technologies (RGUKT) Basar typically include
            eligibility based on the candidates' performance in the Telangana State SSC (10th class) or its equivalent
            examination.
            Shortlisted candidates are called for counseling sessions, where they undergo document verification. This
            step ensures that candidates meet all the necessary eligibility criteria and have the required documentation
            to support their application.
        </p>
    </div>
    <div class="container">
        <div class="thumbanail left">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700753532/slide_17_bhnd6q.jpg" alt="" />
        </div>
        <h1>Vision and Mission</h1>
        <p>
            The vision of RGUKT Basar is centered around empowering students from rural backgrounds, providing them with
            access to quality education and opportunities for personal and professional growth.
            The mission of RGUKT Basar is to provide a transformative educational experience that goes beyond rote
            learning, fostering critical thinking, creativity, and innovation.
        </p>
        <p>
            The university is committed to the holistic development of its students, aiming to nurture not only academic
            excellence but also ethical values, leadership skills, and a sense of social responsibility.
        </p>

    </div>

    <div class="container">
        <div class="thumbanail right">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700753431/slide9_fu8zg2.jpg" alt="" />
        </div>
        <h1>Academics</h1>

        <p>
            The institution adopts innovative teaching methods, including hands-on projects and collaborative learning,
            to enhance students' problem-solving skills. This approach fosters academic environment that encourages
            critical thinking and creativity.
            The faculty comprises accomplished educators and researchers dedicated to imparting quality education and
            mentoring students.The emphasis on research enriches the academic experience. preparing students for both
            industry challenges and further studies.
        </p>
        </p>
    </div>
    <div class="container">
        <div class="thumbanail left">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700753090/slide11_xmys5m.jpg" alt="" />
        </div>
        <h1>Campus Facilities</h1>
        <p>
            The campus of RGUKT Basar is equipped with state-of-the-art infrastructure, including modern classrooms,
            well-equipped laboratories, a comprehensive library, and residential facilities for students. The campus is
            designed to foster a conducive learning environment and provides amenities for both academic and
            extracurricular activities.
        </p>

    </div>
    <div class="container">
        <div class="thumbanail right">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700753290/slide10_igmrth.jpg" alt="" />
        </div>
        <h1>Research and Innovation</h1>
        <p>
            The institution encourages students to initiate and participate in research projects, promoting a hands-on
            approach to learning and problem-solving.
            The faculty members at RGUKT Basar are actively involved in research, contributing to the academic and
            scientific community through publications, patents, and collaborations.
            RGUKT Basar establishes innovation hubs and centers, creating dedicated spaces for ideation, prototyping,
            and the development of innovative solutions to real-world challenges.
        </p>

    </div>
    <div class="container">
        <div class="thumbanail left">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700753998/slide_18_hxivtw.jpg" alt="" />
        </div>
        <h1>Placements</h1>
        <p>
            RGUKT Basar likely conducts regular placement activities, including recruitment drives by renowned
            companies, to provide students with opportunities to showcase their skills and secure employment.
            The success of students in placements is influenced by factors such as academic performance, practical
            skills, and participation in various placement drives organized by the university. <br>
            The university's commitment to academic excellence and industry-relevant training may contribute to
            favorable outcomes in placements.
        </p>
    </div>
    <div class="container">
        <div class="thumbanail right">
            <img src="https://res.cloudinary.com/dqf4rw1w4/image/upload/v1700715035/slide15_deggc6.jpg" alt="" />
        </div>
        <h1>Achievements</h1>

        <p>
            Received a national award in 2018 as the first university to adopt Blockchain Technology for authenticating
            the academic certificates issued by it.
            Regional Centre for NPTEL programme – currently rated among the top 50 of 1,300 local chapters. The
            university also runs NPTEL courses under credit transfer method.
            One of the five universities in the State of Telangana – and the only one in the rural districts – to be
            hosting the Innovation, Incubation and Entrepreneurial Development Programme.
        </p>

    </div>
    <br><br>
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