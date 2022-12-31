
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    require('linkdb.php');
    session_start();
    // When form submitted, check and create user session
 

    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
     
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        
         
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: index.php");
        }
    
        else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='log.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>






<form class="form" method="post" name="login">

<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 2%, 100%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">Shopping with our online store</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          ShoppingLK The Best Online Shopping Experience in Sri Lanka with Islandwide Free/ Express/ Cash On Delivery. Grab The Best Deals, Offers, Promotions on ...
          </p>
        </div>

        <div class="col-lg-6 mb-6 mb-lg-2">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form>
                               
               <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name= "email" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                  <p>
                    <a href="signin.php" class="link-primary">New Registration</a>
                  </p
                  
            
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </form>
</section>
<?php
    }
?>
</body>
</html>