<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        
      .btn-text-right{
	    text-align: right;	

      }
      h2{
        text-align: center;
        color: #141616;
        background-color: #dfac5f;
        padding: 1%;
    }
    

    

    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Shopping LK</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="admin.php">Remove Products</a></li>
        <li class="active"><a href="addproduct.php">Add Products</a></li>
      
    </ul>
  
    <div class = "btn-text-right">
    <button onclick= "document.location = 'logout.php'" idn_to_ascii class="btn btn-primary px-1 me-1">
            Logout
          </button>
    </div>
  </div>
  


</nav>
<h2>Admin Dashboard</h2>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>Add Products Form</h3>
                    </div>
                    <p>Please Enter the product to insert database</p>
                    <form action="addproduct.php" method="post">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image URL</label>
                            <input type="text" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit to Database">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		
        $db_name = "shopping";
		$conn = mysqli_connect("localhost", "root", "", "$db_name");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
	
		
		
		// Performing insert query execution
		// here our table name is college
        if(isset($_POST["submit"])){
            $id = $_REQUEST['id'];
            $description = $_REQUEST['description'];
            $image = $_REQUEST['image'];
            $price = $_REQUEST['price'];
		$sql = "INSERT INTO product VALUES ('$id','$description','$image','$price')";
        
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully</h3>";

			echo nl2br("\n$id\n$description\n "
				. "$image\n $price");


            
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
    }
		?>
	</center>
</body>

</html>
