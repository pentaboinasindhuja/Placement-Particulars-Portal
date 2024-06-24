<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <center>
        <?php
       include "db_conn.php";

        if (isset($_POST['student_ids'])) {

            function validate($data)
            {
               $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $ids = validate($_POST['student_ids']);

            if (empty($ids)) {
                echoAlert("error", "Student IDs are required", 'addstudent.php');
                exit();
            }

            // Split the IDs by commas
            $idArray = explode(",", $ids);

            // Trim each ID to remove extra whitespaces
            $idArray = array_map('trim', $idArray);

            // Filter out empty IDs
            $idArray = array_filter($idArray);

            // Insert each ID into the database
            foreach ($idArray as $id) 
            {
                $sql2 = "INSERT INTO student(sid, ids) VALUES('', '$id')";
                $result2 = mysqli_query($conn, $sql2);

                if (!$result2) 
                {
                    echoAlert("error", "Error occurred while inserting IDs", 'studentid.php');
                    exit();
                }
            }
        echoAlert("success", "Your data has been stored successfully", 'adminHome.php');
        echo "$id";
            exit();
        }

        function echoAlert($icon, $message, $location)
        {
            echo "<script>
                swal({
                    icon: '$icon',
                    text: '$message',
                }).then(function() {
                    window.location.href = '$location';
                });
            </script>";
        }
        ?>
    </center>
</body>
</html>
