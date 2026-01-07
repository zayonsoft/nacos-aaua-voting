<?php
include 'includes/session.php';
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"])) {

    $allowedFileType = ['application/vnd.ms-excel', 'text/xls', 'text/xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

    if (in_array($_FILES["file"]["type"], $allowedFileType)) {

        $targetPath = 'uploads/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());
        for ($i = 0; $i < $sheetCount; $i++) {

            $Reader->ChangeSheet($i);

            foreach ($Reader as $Row) {

                $matric = "";
                if (isset($Row[0])) {
                    $matric = mysqli_real_escape_string($conn, $Row[0]);
                }

                $lastname = "";
                if (isset($Row[1])) {
                    $lastname = mysqli_real_escape_string($conn, $Row[1]);
                }

                $firstname = "";
                if (isset($Row[2])) {
                    $firstname = mysqli_real_escape_string($conn, $Row[2]);
                }

                // Generate password from matric number and hash
                // $password = password_hash($matric, PASSWORD_DEFAULT);

                if (!empty($matric) || !empty($surname) || !empty($first_name)) {
                    $query = "insert into voters(voters_id,firstname,lastname) 
                    values('" . $matric . "','" . $firstname . "','" . $lastname . "')";
                    $result = mysqli_query($conn, $query);
                }
            }
            if (!empty($result)) {
                $_SESSION['success'] = 'Voters/Students added successfully';
            } else {
                $_SESSION['error'] = $conn->error;
            }
            // if ($conn->query($query)) {
            //     $_SESSION['success'] = 'Voters added successfully';
            // } else {
            //     $_SESSION['error'] = $conn->error;
            // }
        }
    } else {
        $_SESSION['error'] = 'Invalid File Type. Upload Excel File!';
    }
}
header('location: upload_voters');
