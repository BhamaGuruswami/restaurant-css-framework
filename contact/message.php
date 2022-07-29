<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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

    <div class = "container">
    <div class="mb-3">
    <div class="text-center text-warning ">
    <h2> Please Share Your Review</h2>
        </div>
  <form id="contact-form" name="contact-form" action="message.php" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" name = "name" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control"  name = "message"id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<input type="submit">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</div>
</body>
</html>