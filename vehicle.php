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
    ?></h1>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <a href="./vehicleadd.php?vi=-1&add1=true">Add Vehicle</a>
      <?php
    $id = $_SESSION['id'];
    $mysqli =mysqli_connect("localhost", "root", "");
    mysqli_select_db($mysqli,'car_insurance');
    $query = "SELECT * FROM `vehicle_det` WHERE `id` = '$id'";
    $result = mysqli_query($mysqli,$query);
    ?>
    <table>
    <tr>
    <th>
    Vehicle Id
    </th>
    <th>
    Source
    </th>
    <th>
    Category
    </th>
    <th>
    Plate Number
    </th>
    <th>
    Manufacture 
    </th>
    <th>
    Type
    </th>
    <th>
    Color
    </th>
    <th>
    Registeration Date
    </th>
    <th>
    Update
    </th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)){
      echo '<tr>';
      echo '<td>'.$row['vehicle_id'].'</td>';
      echo '<td>'.$row['source'].'</td>';
      echo '<td>'.$row['category'].'</td>';
      echo '<td>'.$row['plate_no'].'</td>';
      echo '<td>'.$row['manufacture'].'</td>';
      echo '<td>'.$row['type'].'</td>';
      echo '<td>'.$row['color'].'</td>';
      echo '<td>'.$row['reg_date'].'</td>';
      // echo '<td><a href=vehicleadd.php?vi='.$row['vehicle_id'].'>Edit</a></td>';
      echo "<td><a href='vehicleadd.php?vi=".$row['vehicle_id']."'>Edit</a></td>";
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
