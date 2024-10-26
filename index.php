<?php include("header.php");
 
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

  


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
     <form action="manage_cart.php" method="POST">          
            <div class="card" >
  <img src="images/1.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Mob</h5>
    <p class="card-text">Price: RS.450</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="Item_Name" value="Mob 1">
    <input type="hidden" name="Price" value="450">
  </div>
</div>
</form> 
            </div>
            <div class="col-lg-3">
     <form action="manage_cart.php" method="POST">          
            <div class="card" >
  <img src="images/2.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Mob-2</h5>
    <p class="card-text">Price: RS.650</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="Item_Name" value="Mob-2">
    <input type="hidden" name="Price" value="650">
  </div>
</div>
</form> 
            </div>
            <div class="col-lg-3">
     <form action="manage_cart.php" method="POST">          
            <div class="card" >
  <img src="images/3.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Mob -3</h5>
    <p class="card-text">Price: RS.500</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="Item_Name" value="Mob-3">
    <input type="hidden" name="Price" value="500">
  </div>
</div>
</form> 
            </div>
            <div class="col-lg-3">
     <form action="manage_cart.php" method="POST">          
            <div class="card" >
  <img src="images/4.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Mob-4</h5>
    <p class="card-text">Price: RS.950</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
    <input type="hidden" name="Item_Name" value="Mob-4">
    <input type="hidden" name="Price" value="900">
  </div>
</div>
</form> 
            </div>
        </div>
    </div>
    
</body>
</html>