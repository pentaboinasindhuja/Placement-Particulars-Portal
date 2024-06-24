<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $comp_name = $_POST['comp_name'];
    $file = $_FILES['file'];
    $jobfile = $_FILES['jobfile'];
    $selected_year = $_POST['selected_year'];
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";



$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the selected year is a valid column in the table
    $sql = "SHOW COLUMNS FROM yearpdfs LIKE '$selected_year'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Column exists, proceed to insert/update the data
        // Change this to your desired directory

        // Check if the file already exists
        $targetDirectory = "uploads/";
        $fileName = basename($file['name']);
        $targetFilePath = $targetDirectory . $fileName;

        $jobfileName = basename($jobfile['name']);
        $jobtargetFilePath = $targetDirectory . $jobfileName;

        // Check if both files exist before attempting to move them
        if (file_exists($targetFilePath) && file_exists($jobtargetFilePath)) 
        {
            echo "<script>
                    swal({
                        title: 'Try Again!!',
                        text: 'Same pdf Files already exist.',
                        icon: 'success',
                    }).then(() => {
                        window.location.href = 'addnewcompany.php'; // Redirect to the admin page
                    });
                </script>";
           // echo "Files already exist.";
        } else {
            // Move the files to the specified directory if they exist
            if (!file_exists($targetFilePath)) {
                move_uploaded_file($file['tmp_name'], $targetFilePath);
            }

            if (!file_exists($jobtargetFilePath)) {
                move_uploaded_file($jobfile['tmp_name'], $jobtargetFilePath);
            }

            // Update the file paths in the database
            $sql_update = "INSERT INTO `yearpdfs` (`name`, `job_desc`, `$selected_year`) VALUES ('$comp_name', '$jobfileName', '$fileName')";

            $result1 = $conn->query($sql_update);

            if ($result1) 
            {
                 echo "<script>
                    swal({
                        title: 'Thankyou!!',
                        text: 'Data inserted successfull',
                        icon: 'success',
                    }).then(() => {
                        window.location.href = 'adminHome.php'; // Redirect to the admin page
                    });
                </script>";
                //echo "Data inserted successfully into year $selected_year column for $comp_name";
            } else 
            {
                  echo "<script>
                    swal({
                        title: Try again!!,
                        text: 'Error updating file paths:',
                        icon: 'success',
                    }).then(() => {
                        window.location.href = 'addnewcompany.php'; // Redirect to the admin page
                    });
                </script>";
                echo "Error updating file paths: " . $conn->error;
            }
        }
    } else {
        // Invalid year selected, handle accordingly
        echo "Invalid year selected";
    }

    $conn->close();
}
?>
<body>
