<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <title>Document</title> -->
</head>
<body>
<?php
$sname = "localhost:3307";
$unmae = "root";
$password = "";
$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$dept = $_REQUEST['dept'];
$year = $_REQUEST['year'];
$contact = $_REQUEST['contact'];
$email = $_REQUEST['email'];
$lin = $_REQUEST['lin'];
$company = $_REQUEST['company'];
$ctc = $_REQUEST['ctc'];
$in = $_REQUEST['in'];
$exp = $_REQUEST['exp'];
$sug = $_REQUEST['sug'];

// Validate phone number
if (!preg_match("/^[0-9]{10}$/", $contact)) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Invalid phone number. Please enter a 10-digit numeric phone number.',
        }).then(function() {
            window.location.href = 'main.php';
        });
      </script>";
    exit();
}

// Validate LinkedIn profile
if (!preg_match("/^(https?:\/\/)?(www\.)?linkedin\.com\/.*$/", $lin)) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Invalid LinkedIn profile. Please enter a valid LinkedIn profile URL.',
        }).then(function() {
            window.location.href = 'main.php';
        });
      </script>";
    exit();
}

$sql1 = "SELECT * FROM registration WHERE id='$id'";
$res = mysqli_query($conn, $sql1);
if ($res->num_rows > 0) 
{
     $sql = "UPDATE registration SET name=?, dept=?, year=?, contact=?, email=?, lin=?, company=?, ctc=?, `in`=?, exp=?, sug=? WHERE id=$id";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssssssssss', $name, $dept, $year, $contact, $email, $lin, $company, $ctc, $in, $exp, $sug, $id);
} 
else 
{
    $sql = "INSERT INTO registration  VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssssssssss', $id, $name, $dept,  $year,$contact, $email, $lin, $company, $ctc, $exp,$in , $sug);
}
$sql2 = "DELETE FROM student where ids='$id'";
mysqli_query($conn,$sql2);


if (mysqli_stmt_execute($stmt)) {
    echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Thank You',
                    text: 'Your data has saved Successfully',
                }).then(function() {
                    window.location.href = 'main.php';
                });
              </script>";
    exit();
} else {
    echo "ERROR: Hush! Sorry " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</body>
</html>
