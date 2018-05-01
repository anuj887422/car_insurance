<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./main.css?ts=<?=time()?>">
</head>
<body>
<div class="header">
  <h1><?php
  session_start();
    echo "Hello".'  '.$_SESSION["username"];
    ?>
  </h1>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="card box" style="
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 10px;
">
          <a href="./user.php">User Details</a>
          <h1>User Details</h1>
      </div>
      <div class="card box" style="
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 10px;
">
          <a href="./insurance.php">Insurance Details</a>
          <h1>Insurance Details</h1>
      </div>
      <div class="card box" style="
    margin-top: 0px;
    margin-right: 0px;
    margin-left: 0px;
    margin-bottom: 10px;
">
          <a href="./vehicle.php">Vehicle Details</a>
          <h1>Vehicle Details</h1>
      </div>
     </div>
  </div>
  
  <div class="rightcolumn">
    <div class="card">
      <div class="vertical-menu">
            <a href="./home.php" class="active">Home</a>
            <a href="./user.php">User Details</a>
            <a href="./insurance.php">Insurance Details</a>
            <a href="./vehicle.php">Vehicle Details</a>
            
            <a href="./index.php">Logout</a>
          </div>
    </div>

  </div>
</div>

<div class="footer">
<p>All Copyrights Reserved &copy; VCET</p>
</div>

</body>
</html>
