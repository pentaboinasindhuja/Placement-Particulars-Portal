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

include "db_conn.php";
if (isset($_POST['id'])) 
{

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);

    if (empty($id)) 
    {
        header("Location: check.php?error=User Id is required");
        exit();
    }

    $sql = "SELECT * FROM student WHERE LOWER(ids) = LOWER('$id')";
    //echo $sql;

    $result = mysqli_query($conn, $sql);
    //echo mysqli_num_rows($result);

    if (mysqli_num_rows($result) >= 1)
     {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['ids'] = $row['ids'];
        //echo $_SESSION['ids'];
        //echo $row['ids'];
        header("Location: registration.php");
        //echo $sql;
        exit();
    }
     else 
     {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Sorry',
                text: 'Invalid Id Try Again',
            })
            .then(function() {
                window.location.href = 'main.php?';
            });
          </script>";
  //  exit();
        exit();
    }
} 
else 
{
    //echo "not yet placed";
    //header("Location:placed.php?error=Incorect User name or password");
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Sorry',
                text: 'Enter valid Id Try Again',
            })
            .then(function() {
                window.location.href = 'main.php?';
            });
          </script>";
    exit();
}
?>
</body>
</html>
