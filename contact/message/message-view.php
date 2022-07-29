<?php
require 'dbcon.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Message View</title>
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Message View Details 
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                if(isset($_GET['id']))
                {
                    $message_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM messages WHERE id='$message_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $message = mysqli_fetch_array($query_run);
                        ?>
                        
                            <div class="mb-3">
                                <label> Name</label>
                                <p class="form-control">
                                    <?=$message['name'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <p class="form-control">
                                    <?=$message['email'];?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Message</label>
                                <p class="form-control">
                                    <?=$message['message'];?>
                                </p>
                            </div>

                        <?php
                    }
                    else
                    {
                        echo "<h4>No Such Id Found</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</body>
</html>