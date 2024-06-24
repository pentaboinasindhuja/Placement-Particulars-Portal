
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Companies</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

<style>
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

.company{
            color: maroon;
            align-items: center;
        }
        .company_name{
            height: 30px;
            border-style: none;
            margin-right: 40px;
        }
        .choose_file{
            height: 30px;
        }
        .add_company{
            height: 40px;
            background-color: rgb(66, 94, 250);
            border-style: none;
            margin-top: 15px;
            color: white;
            border-radius: 4px;
            width: 135px;
        }
        .body{
            align-items: center;
            background-color: rgb(248, 242, 242);
        }
        .row{
            margin-top: 20px;
            
        }
        .row_padding{
            padding: 25px;
        }
        .button{
            margin-top: 15px;
    border-style: none;
    color: white;
    background-color: rgb(21, 148, 21);
    height: 30px;
    width: 8%;
    border-radius: 8px;
    font-size: 14px;
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
        <button class=" btn-color" type="submit"><a href="index.php">LOGOUT</a></button>
      </form>
    </div>
  </nav>
  <br><br>

<body class="body">
  
<center>
    <h1 class="company">Company Management</h1>
    <br>
    <!-- Form to add a new company -->
    <form action="post6.php" method="POST" enctype="multipart/form-data">
   <center>Company: <input type="text" id="companyName" placeholder="Company Name" class="company_name" name="comp_name" required></center>
   <br>
   <center> job desc: <input type="file" name="jobfile" id="file"> </center>
   <br>
  
    </select>
    <button type="submit" class="add_company">Add Company</button>
</form>

    <script>
let companies = [];
let currentEditIndex = -1;

const companyForm = document.getElementById("companyForm");
companyForm.addEventListener("submit", function(event) {
    event.preventDefault();

    Check if we are editing or adding a new company
    if (currentEditIndex === -1) {
        addCompany();
    } else {
        updateCompany(currentEditIndex);
    }
});

Function to add a new company
function addCompany() {
    const companyNameInput = document.getElementById("companyName");
    const pdfFileInput = document.getElementById("pdfFile");

    const companyName = companyNameInput.value.trim();
    const pdfFile = pdfFileInput.files[0];

    Check if both fields are not empty
    if (companyName !== "" && pdfFile) {
        companies.push({ companyName, pdfFile });
        updateTable();
        companyNameInput.value = "";
        pdfFileInput.value = "";
    }
}

Function to update the table with company data
function updateTable() {
    const companyTable = document.getElementById("companyTable");

    Clear the existing table
    companyTable.innerHTML = `
        <tr>
            <th>Company Name</th>
            <th>PDF File</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    `;

    Add company data to the table
    companies.forEach((company, index) => {
        const row = document.createElement("tr");

        const nameCell = document.createElement("td");
        nameCell.textContent = company.companyName;

        const pdfCell = document.createElement("td");
        const pdfLink = document.createElement("a");
        pdfLink.textContent = "View PDF";
        pdfLink.href = URL.createObjectURL(company.pdfFile);
        pdfLink.target = "_blank";

        const editCell = document.createElement("td");
        const editButton = document.createElement("button");
        editButton.textContent = "Edit";
        editButton.addEventListener("click", () => {
            editCompany(index);
        });

        const deleteCell = document.createElement("td");
        const deleteButton = document.createElement("button");
        deleteButton.textContent = "Delete";
        deleteButton.addEventListener("click", () => {
            deleteCompany(index);
        });

        pdfCell.appendChild(pdfLink);
        editCell.appendChild(editButton);
        deleteCell.appendChild(deleteButton);

        row.appendChild(nameCell);
        row.appendChild(pdfCell);
        row.appendChild(editCell);
        row.appendChild(deleteCell);

        companyTable.appendChild(row);
    });
}

Function to edit a company
function editCompany(index) {
    currentEditIndex = index;
    const company = companies[index];
    const companyNameInput = document.getElementById("companyName");
    companyNameInput.value = company.companyName;
    You can also update the file input here if needed.
}

Function to update a company
function updateCompany(index) {
    const companyNameInput = document.getElementById("companyName");
    const pdfFileInput = document.getElementById("pdfFile");

    const companyName = companyNameInput.value.trim();
    const pdfFile = pdfFileInput.files[0];

    Check if both fields are not empty
    if (companyName !== "" && pdfFile) {
        companies[index] = { companyName, pdfFile };
        updateTable();
        companyNameInput.value = "";
        pdfFileInput.value = "";
        currentEditIndex = -1;
    }
}

Function to delete a company
function deleteCompany(index) {
    companies.splice(index, 1);
    updateTable();
    currentEditIndex = -1;
}

Initial table update
updateTable();

    </script>
    
<!--     
    <button class="button">Save</button> -->

</center>
  <br><br>

</body>

</html>