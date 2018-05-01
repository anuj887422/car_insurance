<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./main.css?ts=<?=time()?>">
</head>
<body>

<div class="header">
<h1><?php
$add2 = 0;
  session_start();
  $vivalue = -1;
    echo "Hello".'  '.$_SESSION["username"];
    // $id = $_SESSION['id'];
     $mysqli =mysqli_connect("localhost", "root", "");
     mysqli_select_db($mysqli,'car_insurance');
    //  $query = "SELECT * FROM `vehicle_det` WHERE `id` = '$id'";
    //  $result = mysqli_query($mysqli,$query);
    //  $row = mysqli_fetch_array($result);
    //    $_SESSION['vehicle_id']=$row['vehicle_id'];
    if(isset($_GET['vi'])){
      $viisset = true;
      $vi = $_GET['vi'];
      $vivalue = $vi;
      $query = "SELECT * FROM `vehicle_det` WHERE `vehicle_id` = '$vi'";
     $result = mysqli_query($mysqli,$query);
    $row = mysqli_fetch_array($result);
    }
    if(isset($_GET['add1'])){
    $add2 = 1;  
    }
    if(isset($_GET['add2'])){
      $id= $_SESSION['id'];
      $source= $_POST['source'];
      $category= $_POST['category'];
      $plate_no= $_POST['plate_no'];
      $manufacture= $_POST['manufacture'];
      $type= $_POST['type'];
      $color= $_POST['color'];
      $reg_date= $_POST['registration_date'];
      $query ="INSERT INTO `vehicle_det`(`source`, `category`, `plate_no`, `manufacture`, `type`, `color`, `reg_date`, `id`) VALUES ('$source','$category','$plate_no','$manufacture','$type','$color','$reg_date','$id')";
      $result = mysqli_query($mysqli,$query);
      
    }
    if(isset($_GET['add2'])){
      if($_GET['add2'] == 0){
        $id= $_SESSION['id'];
        $vehicle_id = $_GET['vi'];
      $source= $_POST['source'];
      $category= $_POST['category'];
      $plate_no= $_POST['plate_no'];
      $manufacture= $_POST['manufacture'];
      $type= $_POST['type'];
      $color= $_POST['color'];
      $reg_date= $_POST['registration_date'];

      $query = "UPDATE `vehicle_det` SET `source`='$source',`category`='$category',`plate_no`='$plate_no',`manufacture`='$manufacture',`type`='$type',`color`='$color',`reg_date`='$reg_date',`id`='$id' WHERE `vehicle_id`='$vehicle_id'";
      $result = mysqli_query($mysqli,$query);
    }

    }
    ?></h1>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
        <form action="./vehicleadd.php?vi=<?php echo $vivalue ?>&add2=<?php echo $add2 ?>" method='post'>
          <table>
              <tr>
                <td>
                  <label for="source">source</label>
                </td>
                <td>
                  <input type="text" name="source" value="<?php echo $row['source'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="category">category</label>
                </td>
                <td>
                  <input type="text" name="category" value="<?php echo $row['category'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="plate_no">plate_no</label>
                </td>
                <td>
                  <input type="text" name="plate_no" value="<?php echo $row['plate_no'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="manufacture">manufacture</label>
                </td>
                <td>
                  <input type="text" name="manufacture" value="<?php echo $row['manufacture'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="type">type</label>
                </td>
                <td>
                  <input type="text" name="type" value="<?php echo $row['type'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="color">color</label>
                </td>
                <td>
                  <input type="text" name="color" value="<?php echo $row['color'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="registration_date">registration_date</label>
                </td>
                <td>
                  <input type="date" name="registration_date" value="<?php echo $row['reg_date'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <button name="addvehicle" type="submit">Submit</button>
                </td>
              </tr>
            </table>
          </form>
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
