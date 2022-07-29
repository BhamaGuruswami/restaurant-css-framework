 <?php

 require_once ("connect.php");
if(isset($_POST) & !empty($_POST)){
  $name = ($_POST["name"]);
  $email = ($_POST["email"]);
  $subject =  ($_POST["subject"]);
  $branch = ($_POST["country"]);
  $gender = ($_POST["exampleRadios"]);
  $message = ( $_POST["message"]);

  $createsql = "INSERT INTO `contact` (name, email, subject, branch, gender, message) VALUES ('$name','$email','$subject','$branch','$gender','$message')";
  $res = mysqli_query($conne, $createsql) or die(mysqli_error($conne));
 if ($res){
   $message2 = " insertion";

 }
 else{
  $error = "error to see the again";
 }
}

 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <script src="https://kit.fontawesome.com/6c36406174.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </style>
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
  <div class="container bg-light">
    <section class="mb-4 text-content-center">
    <!--Section heading-->
    <h2 class="h1-responsive fw-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 fw-bold ">Do you have any questions? <br>Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

<div class ="container">
        <div class="row pt-4">
        <?php if(isset($message2)) { ?>
<div class = "alert alert-success" role ="alert"> 
  <?php echo $message2; ?>
</div><?php } ?>

<?php if(isset($error)) { ?>
<div class ="alert alert-danger" role ="alert"> 
  <?php echo $error; ?>
</div><?php } ?>
</div>
</div>

  <div class="row ">
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="" method="POST">
 
              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="name" class="">Your name</label>
                          <input type="text" id="name" name="name" class="form-control">

                      </div>
                  </div>

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <label for="email" class="">Your email</label>
                          <input type="text" id="email" name="email" class="form-control">

                      </div>
                  </div>

               
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                          <input type="text" id="subject" name="subject" class="form-control">

                      </div>
                  </div>
              </div>
              <!--Grid row-->
              <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="branch" class="">Branch</label>
                  <select class="form-select " name = "country" aria-label="Default select example">
                    <option selected>Select the branch</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Germany">Germany</option>
                  </select>
              </div>
              </div>
              </div>
                            <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">  
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Female" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Female
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Male">
                <label class="form-check-label" for="exampleRadios2">
                  Male
                </label>
              </div>
                  </div>
                </div>
              </div>
              

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">
                      <div class="md-form">
                        <label for="message">Your message</label>
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                      </div>
                  </div>
              </div>
              <!--Grid row-->
              <br>
          <div class="text-center text-md-left">
            <input type = "submit" value = "submit" class="btn btn-primary" >
            <a href = "backoffice.php">
              <button class = "btn btn-success" type ="button">
            see the list
</button>
</a>
          </div>
          </form>
          
          <div class="status"></div>
      </div>
      <!--Grid column-->
 
      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Brussels,Rue picard,1000, Belgium</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+ 32 234 567 89</p>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>ABC123@gmail.com</p>
              </li>
          </ul>
      </div>
      <!--Grid column-->
  </div>
</section>

<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2017–2022 PIZZERIA</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
  <div>
    <section>
      <div class="d-flex justify-content-end justify-content-md-between p-4 border-bottom">
        <a href="" class="me-4 text-reset">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>
  </div>
</footer>

  </div>


<!--Section: Contact v.2-->
  
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</body>

</html>