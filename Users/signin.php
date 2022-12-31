<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
<?php
    require('linkdb.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($con, $lastname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $repass = stripslashes($_REQUEST['repass']);
        $repass = mysqli_real_escape_string($con, $repass);
        
      			
      if($password!=$repass) {
          echo "<div class='form'>
          <h3>Mismatch Password.</h3><br/>
          <h3>Try again Registration with the Re-type same password.</h3><br/>
          </div>";
      }else{
        $query    = "INSERT into `users` (firstname, lastname,  password, email, create_datetime)
                     VALUES ('$firstname', '$lastname', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);

      }
      
      

       if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='log.php'>Login</a></p>
                  </div>";
        } 
    } else {
?>
    

        <form class="form" action="" method="post">
                <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
    .background{
        background-color: #65d1c4;
    }
  </style>

  <!-- Jumbotron -->
  <div class="background">
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="firstname" class="form-control" />
                    <label class="form-label" for="form3Example1">First Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="lastname" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Re Enter Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="repass" class="form-control" />
                <label class="form-label" for="form3Example4">Re-enter Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" name= "submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

              
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-6 mb-lg-6">
        <img src="https://www.kotak.com/content/dam/Kotak/product_card_images/how-credit-cards-enhance-your-shopping-experience.jpg" class="w-200 rounded-4 shadow-4"
           alt="" />
      </div>
    </div>
  </div>
 </div>

  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
        </form>
        </div>
<?php
    }
?>
</body>
</html>