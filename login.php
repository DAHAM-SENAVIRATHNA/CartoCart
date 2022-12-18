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
    // When form submitted, check and create user session.
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
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
        <!--h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="email" placeholder="email" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="signin.php">New Registration</a></p-->
        


    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    #abc{
        background-color: #ECC3D3;
        border-radius: 20px;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 5;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>


  
  <form class="form" method="post" name="login">
  <div class="card mb-7">
    <div class="row g-2 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-4 px-md-5">
    <div id= "abc" class="card-body p-8 shadow-4 text-center">
        <h2 class="fw-bold mb-4">LOG IN NOW</h2>
    

          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name= "email" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              
            </div>

            <!-- Submit button -->
            
            <input type="submit" value= "SIGN IN" name="submit" class="btn btn-primary btn-block mb-2"/>
            <p>
            <a href="signin.php" class="link-primary">New Registration</a>
            </p
           

          

        </div>
      </div>
    </div>
  </div>
</div>
</form>
</section>
<!-- Section: Design Block -->
  
<?php
    }
?>
</body>
</html>