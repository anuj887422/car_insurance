<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./main.css?ts=<?=time()?>">
</head>
<body>
<div class="header">
<h1><?php
  session_start();
    echo "Hello".'  '.$_SESSION["user"];
    $id=$_SESSION['id'];
    $vehicle_id = $_SESSION['vehicle_id'];
     $mysqli =mysqli_connect("localhost", "root", "");
     mysqli_select_db($mysqli,'car_insurance');
    //  $query = "SELECT * FROM `ins_det` WHERE `vehicle_id` = '$vehicle_id'";
    //  $result = mysqli_query($mysqli,$query);
    //  $row = mysqli_fetch_array($result);
     if(isset($_GET['ii'])){
       $ii= $_GET['ii'];
       $query = "SELECT * FROM `ins_det` WHERE `ins_id` = '$ii'";
     $result = mysqli_query($mysqli,$query);
     $row = mysqli_fetch_array($result);
       
     }
     if(isset($_GET['add1'])){
      $add2 = true;  
      }
      if(isset($_GET['add2'])){
        $ins_provider= $_POST['ins_provider'];
        $ins_no = $_POST['ins_no'];
        $valid_date = $_POST['valid_date'];
        $id = $_SESSION['id'];
        $query ="INSERT INTO `ins_det`(`ins_provider`, `ins_no`, `valid_date`,`id`) VALUES ('$ins_provider','$ins_no','$valid_date','$id')";
        $result = mysqli_query($mysqli,$query);
      }
    //  if(isset($_POST['addinsu'])){
    //   $vehicle_id = $_SESSION['vehicle_id'];
    //   $ins_provider = $_POST['ins_provider'];
    //   $ins_no = $_POST['ins_no'];
    //   $valid_date = $_POST['valid_date'];
    //   echo '  '.$vehicle_id;
    //   $query = "INSERT INTO `ins_det` (`ins_id`, `ins_provider`, `ins_no`, `valid_date`, `vehicle_id`,`id`) VALUES (NULL, '$ins_provider', '$ins_no', '$valid_date', '$vehicle_id','$id')";
    //   $result = mysqli_query($mysqli,$query);
    //   echo $result;

      
    // }
    ?></h1>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
        <form action="./insuranceadd.php?ii=-1&add2=<?php echo $add2 ?>" method="post">
          <table>
              <tr>
                <td>
                  <label for="ins_provider">Insurance Provider</label>
                </td>
                <td>
                  <input type="text" name="ins_provider" value="<?php echo $row['ins_provider'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="ins_no">Insurance Number</label>
                </td>
                <td>
                  <input type="text" name="ins_no" value="<?php echo $row['ins_no'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label for="valid_date">Valid Date</label>
                </td>
                <td>
                  <input type="date" name="valid_date" value="<?php echo $row['valid_date'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" name="addinsu">Submit</button>
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
