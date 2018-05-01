<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./main.css?ts=<?=time()?>">
    <script type="text/javascript">
    function jsfunction(){
      var person = prompt("Please enter your name", "Harry Potter");
    }
    </script>
</head>
<body>

<div class="header">
<h1><?php
  session_start();
    echo "Hello".'  '.$_SESSION["username"];
    ?></h1>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <?php
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
     $mysqli =mysqli_connect("localhost", "root", "");
     mysqli_select_db($mysqli,'car_insurance');
     $query = "SELECT * FROM `owner_det` WHERE `username` = '$username' and `password` = '$password'";
     $result = mysqli_query($mysqli,$query);
     $row = mysqli_fetch_array($result);
    ?>
    <table>
    <tr>
    <td>
    Username
    </td>
    <td>
    <?php echo $row['username'] ?>
    </td>
    </tr>
    <tr>
    <td>
    Date of Birth
    </td>
    <td>
    <?php echo $row['dob'] ?>
    </td>
    </tr>
    <tr>
    <td>
    Gender
    </td>
    <td>
    <?php echo $row['gender'] ?>
    </td>
    </tr>
    <tr>
    <td>
    Nationality
    </td>
    <td>
    <?php echo $row['nationality'] ?>
    </td>
    </tr>
    <tr>
    <td>
    Email Address 
    </td>
    <td>
    <?php echo $row['email'] ?>
    </td>
    </tr>
    <tr>
    <td>
    Licence Number
    </td>
    <td>
    <?php echo $row['lic_no'] ?>
    </td>
    </tr>
    </table>
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
