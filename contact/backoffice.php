
<?php
require_once("connect.php");
$ReadSql =  "SELECT * FROM `contact`";

$res = mysqli_query($conne, $ReadSql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navigation-wrap bg-info">
    <div class="container">
      <a class="navbar-brand fw-bold " href="../index.html">
        <img src="../images/logo.jpg" height="150px" width="150px" class="img-fluid"> Welcome
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="fas fa-stream navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse fw-bold " id="navbarNav">
        <li class="nav-item">
            <a class="nav-link "  href="../menu/menu.html">Menu</a>
          </li>
          <li class="nav-item">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <a class="nav-link" href="../picture/picture.html">Picture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../restaurant/restaurant.html">Restaurant</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="../contact/Contact.html">Contact</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="../ordernow/ORDER NOW.html"><button class="main-btn ">ORDER NOW</button></a>
        </li>

        </ul> 
      </div>
    </div>
  </nav>

<div class ="container">
    <div class ="row pt-4"> 
        <a href ="Contact.php">
            <button class ="btn btn-primary" type = ""> 
                Guest book
            </button>
</a>
    </div>   

    <div class ="row pt-4"> 
        <a href ="imgUpload.php">
            <button class ="btn btn-primary" type = ""> 
                Gallery
            </button>
</a>
    </div>   
    <div class ="row pt-4"> 
        <a href ="message.php">
            <button class ="btn btn-primary" type = ""> 
                Message
            </button>
</a>
    </div>   

    <table class="table table-success table-striped mt-3">
    <thead>
        <tr>
            <th> Id </th>
            <th> Name </th>
            <th> Email </th>
            <th> Subject </th>
            <th> Branch </th>
            <th> Gender </th>
            <th> Message </th>
            <th> Action </th>
        </tr>
</thead>
<tbody>
<?php while ($r = mysqli_fetch_assoc($res)) {  
?>

<tr> 
<th scope ="row"><?php echo $r["id"]; ?> </th>
<td><?php echo $r["name"]; ?></td>
<td><?php echo $r["email"]; ?></td>
<td><?php echo $r["subject"]; ?></td>
<td><?php echo $r["branch"]; ?></td>
<td><?php echo $r["gender"]; ?></td>
<td><?php echo $r["message"]; ?></td>

<td>
    <a href = "update.php?id=<?php echo $r["id"]; ?> " class ="m-2">
      <i class ="fa fa-edit fa-2x"></i>
    </a>
    <i class ="fa fa-trash fa-2x red-icon"
        data-bs-toggle ="modal"
        data-bs-target ="#exampleModal<?php echo $r["id"]; ?>">
    </i>

<div class ="modal fade" id ="exampleModal<?php echo $r["id"]; ?>"   
     role ="dialog">
<div class ="modal-dialog"> 
    <div class ="modal-content"> 
        <div class ="modal=body">
        <p> Do you want to continue with this contact ?</p>
    </div>
    <div class = "modal-footer">
        <button type ="button" class ="btn btn-primary" 
        data-bs-dismiss="modal">Cancel</button>
        <a href ="delete.php?id=<?php echo $r["id"]; ?>">
        <button type ="button" class ="btn btn-danger">
            Confirm
        </button>
        </a>
      </div>
  </div>
</div>

</div>

</td>
</tr>

<?php } ?>

</tbody>

</table>
</div>
 
</body>
</html>