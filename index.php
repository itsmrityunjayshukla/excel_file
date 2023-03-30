<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excelsheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h5 class="mb-3"><strong>Import Excel File In To Database</strong></h5>
                <hr>

                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h5>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
                ?>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="card card-body shadow">
                        <div class="row">
                            <div class="col-md-2 my-auto">
                                <h5>Select File</h5>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="import_file" class="form-control" id="">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary" name="import_file_btn">Upload / Import</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-12 mt-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Student Data</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>E-MAIL</th>
                                    <th>PHONE</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                    include 'db.php';

                    $selectquery = "SELECT * FROM `tabxls`";

                    $query = mysqli_query($con,$selectquery);

                    // $result = mysqli_fetch_array($query);

                    while($result = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $result['id']; ?>
                            </td>
                            <td>
                                <?php echo $result['name']; ?>
                            </td>
                            <td>
                                <?php echo $result['email']; ?>
                            </td>
                            <td>
                                <?php echo $result['phone']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    
                    
                    ?>
                    </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>