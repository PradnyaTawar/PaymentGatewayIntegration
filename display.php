<?php  
include "connection.php";
error_reporting(0);

if(count($_POST)!=0)
{
    extract($_POST);
    $query = " insert into userinfo (user, email, mobile, comment)
    values('$user', '$email', '$mobile', '$comment')";
    $result =mysqli_query($con , $query);
    if($result==true)
    {
      //  echo "Record inserted";
    }
    else{
       // echo "failed";
    }
}
?>
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
      </section>
     <div class="container">
          <div class="row">
            <div class="col-lg-12"><table class="table">
  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Comment</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>

    </tr>
  </thead>
  <?php 
  include 'connection.php';
  $query= "select * from userinfo";
  $result=mysqli_query($con, $query);
  while($res=mysqli_fetch_array($result))
  {

  ?>
  <tbody>
    <tr>
      <td><?php echo $res['id'] ?></td>
      <td><?php echo $res['user'] ?></td>
      <td><?php echo $res['email'] ?></td>
      <td><?php echo $res['mobile'] ?></td>
      <td><?php echo $res['comment'] ?></td>
      <td><a href="delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>

    </tr>
    
  </tbody>
  <?php } ?>
</table></div>
          </div>

     </div>
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

