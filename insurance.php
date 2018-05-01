<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./main.css?ts=<?=time()?>">
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"cis");
$query = "SELECT * FROM `insurance_det`";
$result= mysqli_query($con,$query);
?>
<div class="header">
<h1><?php
  session_start();
    echo "Hello".'  '.$_SESSION["username"];
    ?></h1>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <a href="./insuranceadd.php?ii=-1&add1=true">Add Insurance</a>
    <?php
    $id = $_SESSION['id'];
    $mysqli =mysqli_connect("localhost", "root", "");
    mysqli_select_db($mysqli,'car_insurance');
    $query = "SELECT * FROM `ins_det` WHERE `id` = '$id'";
    $result = mysqli_query($mysqli,$query);
   ?>
   <table>
    <tr>
    <th>
    Insurance Id
    </th>
    <th>
    Insurance Provider
    </th>
    <th>
    Insurance Number
    </th>
    <th>
    Valid Date
    </th>
    <th>
    Update
    </th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)){
      echo '<tr>';
      echo '<td>'.$row['ins_id'].'</td>';
      echo '<td>'.$row['ins_provider'].'</td>';
      echo '<td>'.$row['ins_no'].'</td>';
      echo '<td>'.$row['valid_date'].'</td>';
      echo '<td><a href=insuranceadd.php?ii='.$row['ins_id'].'>Edit</a></td>';
      echo '</tr>';
    }
    ?>
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
