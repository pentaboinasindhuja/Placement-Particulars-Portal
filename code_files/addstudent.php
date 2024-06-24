

<!DOCTYPE html>
<html>
<head>

    <center>
    <title>Student ID Management</title>
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
        table {
            border: 0.063rem solid black;
            width: 30%;
            text-align: center;
        }
        th {
            height: 40px;
        }

        td {
            padding: 0.75rem;
        }

        th,
        td {
            border: 0.063rem solid black;
            text-align: center;
        }

        .student {
            margin-right: 20px;
            margin-bottom: 40px;
            height: 28px;
            align-items: center;
        }

        .add {
            padding: 0rem;
            padding-bottom: 0.5rem;
            margin-top: 8px;
        }

        .management {
            color: maroon;
        }

        .back {
            background-color: white;
        }

        .save {
            margin-top: 2rem;
            height: 2rem;
            border-radius: 0.25rem;
            margin-right: 2.5rem;
            background-color: rgb(19, 185, 19);
            color: black;
            border: none;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
    a {
      text-decoration: none;
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
<body class="back">
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
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <button class=" btn" type="submit"><a href="logout.php" style="text-decoration: none;">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br>

    <form action="studentid.php" method="post">
        <h1><div class="management">Placed Student ID's</div></h1>
        <br>
        <input type="text" id="studentIdInput" placeholder="Enter Student ID(s) separated by commas" name="ids" class="student">
        <button type="button" onclick="addStudents()"><div class="add">Add Student(s)</div></button>
        <br>
        <table id="studentTable" border="1">
            <tr>
                <th>Student ID</th>
                <th>Action</th>
            </tr>
        </table>
        <button type="submit" class="save">Save</button>

        <!-- Hidden input field to store the student IDs -->
        <input type="hidden" name="student_ids" id="studentIdsHiddenInput">

    </center>
    </form>

    <script>
        // Initialize an array to store student IDs
        let studentIds = [];

        // Function to add students to the table
        function addStudents() {
            const studentIdInput = document.getElementById("studentIdInput");
            const inputValues = studentIdInput.value.trim();

            // Check if the input is not empty
            if (inputValues !== "") {
                // Split the input values by commas
                const newIds = inputValues.split(",").map(id => id.trim());

                // Filter out empty strings and add unique IDs to the array
                newIds.filter(id => id !== "").forEach(id => {
                    if (!studentIds.includes(id)) {
                        studentIds.push(id);
                    }
                });

                updateTable();
                studentIdInput.value = ""; // Clear the input field
            }
        }

        // Function to update the table with student IDs
        function updateTable() {
            const studentTable = document.getElementById("studentTable");

            // Clear the existing table
            studentTable.innerHTML = `
                <tr>
                    <th>Student ID</th>
                    <th>Action</th>
                </tr>
            `;

            // Add student IDs to the table
            for (let i = 0; i < studentIds.length; i++) {
                const studentId = studentIds[i];

                const row = document.createElement("tr");
                const idCell = document.createElement("td");
                idCell.textContent = studentId;
                const deleteCell = document.createElement("td");
                const deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.onclick = function() {
                    deleteStudent(i);
                };

                deleteCell.appendChild(deleteButton);
                row.appendChild(idCell);
                row.appendChild(deleteCell);
                studentTable.appendChild(row);
            }

            // Update the hidden input field with the current student IDs
            const studentIdsHiddenInput = document.getElementById("studentIdsHiddenInput");
            studentIdsHiddenInput.value = studentIds.join(",");
        }

        // Function to delete a student from the array
        function deleteStudent(index) {
            studentIds.splice(index, 1);
            updateTable();
        }

        // Initial table update
        updateTable();
    </script>

</body>
</html>
