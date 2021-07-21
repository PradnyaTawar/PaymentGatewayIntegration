<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap" 
    rel="stylesheet">    
    <title>Payment Gateway</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php">Payment Gateway</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            
          </ul>
          <form> <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HbEG5qKjZ0NboS" async> </script> 
          </form>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg" alt="First slide"
            width="1000" height="500">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Second slide"
            width="1000" height="500">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/3.jpg" alt="Third slide"
            width="1000" height="500">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <section class="my-4">
      <div>
              <h2 class="text-center">About us</h2>
          </div>
          <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 c0l-12">
                  <img src="images/4.svg" class="img-fluid aboutimg">
              </div>
              <div class="col-lg-6 col-md-6 c0l-12">
                  <h2  class="display-5">Importance of Digital Payment Service for the Education Sector</h2>
                  <p class="py-5">Most of the educational institutes are still accustomed to the error-prone manual process due to either lack of viable options or their hesitance towards culminating them. These manual processes are time consuming and necessitates efforts from the administration, teachers, parents and students and may expose the school to a higher risk of fallacy and corruption.</p>
             <a href="about.php" class="btn btn-success">check more</a>
              
        </div>
          </div>
        </div>
        
      </section>
      <section class="my-5">
      <div>
          <h2 class="text-center">Contact us</h2>
      </div>
     <div class="w-50 m-auto">
       <form action="userinfo.php" method="POST">
         <div class="form-group">
           <label>Username</label>
           <input type="text" name="user" autocomplete="off" class="form-control">
         </div>
         <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile </label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
       </form>
     </div> 
      </section>

     <footer class="footer">
          <p class="p-3 bg-dark text-center text-white">“Copyright ©PradnyaTawar. All Rights Reserved | Contact Us: +91 7350284384”.</p>
  </footer>
                
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>