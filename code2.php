<?php
session_start();
// $con = mysqli_connect("localhost","root","","xls");
include "database.php";
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['import_file_btn']))
{
    $allow_ext = ['xls', 'csv', 'xlsx'];

    $filename = $_FILES['import_file']['name'];
    $checking = explode(".", $filename);
    $file_ext = end($checking);

    if(in_array($file_ext, $allow_ext))
    {
        $target_path = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($target_path);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            $id = $row['0'];
            $name = $row['1'];
            $enroll = $row['2'];
            $father_name = $row['3'];
            $contact = $row['4'];
            $email = $row['5'];
            $gender = $row['6'];
            $dob = $row['7'];
           
            $checkfield = "SELECT candidate_id FROM excel_data WHERE candidate_id='$id'";
            $checkfield_result = mysqli_query($conn, $checkfield);

            if(mysqli_num_rows($checkfield_result) > 0)
            {
                // Already Exist
                // $up_query = "UPDATE `tabxls` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id='$id'";
                
                $up_query = "UPDATE excel_data SET candidate_name='$name',enroll='$enroll',
                father_name='$father_name',contact_no='$contact',email='$email',gender='$gender',
                dob='$dob' WHERE candidate_id='$id'";
                // print_r($up_query);
                // die();
                
                $up_result = mysqli_query($conn, $up_query);
                $msg = 1;
            }
            else
            {
                // $in_query = "INSERT INTO `tabxls`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";

                $in_query = "INSERT INTO `excel_data`(`candidate_name`, `enroll`, `father_name`, `contact_no`, `email`, `gender`, `dob`)
                VALUES ('$name','$enroll','$father_name','$contact','$email','$gender','$dob')";
                $in_result = mysqli_query($conn, $in_query);
                $msg = 1;
            }
        }

        if(isset($msg))
        {
            $_SESSION['status'] = "File Imported Successfully";
            header("Location: bulk.php");
        }
        else
        {
            $_SESSION['status'] = "File Imported Failed";
            header("Location: bulk.php");
        }
    }

    else
    {
        $_SESSION['status'] = "Invalid File";
        header("Location: bulk.php");
        exit(0);
    }
}
?>