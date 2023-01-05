
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin pannel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      .btn-text-right{
	    text-align: right;	

      }
      h2{
        text-align: center;
        color: #141616;
        background-color: #dfac5f;
        padding: 1%;
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  padding: 10px;
  margin: 5px 20px 20px 2px;
}
.price {
  color: grey;
  font-size: 22px;
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
      <li class="active"><a href="admin.php">Remove Products</a></li>
      <li><a href="addproduct.php">Add Products</a></li>
    </ul>
  
    <div class = "btn-text-right">
    <button onclick= "document.location = 'logout.php'" idn_to_ascii class="btn btn-primary px-1 me-1">
            Logout
          </button>
    </div>
  </div>
  


</nav>
<h2>Admin Dashboard</h2>





<?php
 include 'dbconnection.php';

            $query = "select * from product order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="product">
                                
                                
                                <div class="card">
                                <img src="<?php echo $row["image"];?>" alt="Denim Jeans"  width="290px" height="300px">
                                <p class="price">$<?php echo $row["price"];?></p>
                                <h5 class="text-info"><?php echo $row["description"];?></h5>
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                
                                <a class="btn btn-danger" name ="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                
                </div>
                </div>
 
</div>
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>

</body>
</html>

        

