<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form">

  <ul class="tab-group">
  <li class="tab active"><a href="#signup">Sign Up</a></li>
  <li class="tab"><a href="#login">Log In</a></li>
  </ul>

  <div class="tab-content">
      <div id="signup">   
      <h1>Sign Up for Free</h1>

      <form action="./index.php" method="post">

      <div class="field-wrap">
      <label>
      Username<span class="req">*</span>
      </label>
      <input name="username" type="text"  required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
      Date of Birth<span class="req">*</span>
      </label>
      <input   name="dob" type="text" required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
      Gender<span class="req">*</span>
      </label>
      <input name="gender"  type="text" required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
      Nationality<span class="req">*</span>
      </label>
      <input  name="nationality" type="text" required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
      Email Address<span class="req">*</span>
      </label>
      <input  name="text"  type="email"required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
        Licence Number<span class="req">*</span>
      </label>
      <input  name="lic_no" type="text" required autocomplete="off"/>
      </div>

      <div class="field-wrap">
        <label>
          Password<span class="req">*</span>
        </label>
        <input  name="password" type="password" required autocomplete="off"/>
      </div>
      <button name="register" type="submit" class="button button-block"/>Get Started</button>

      </form>

      </div>

      <div id="login">   
      <h1>Welcome Back!</h1>

      <form action="./index.php" method="post">

      <div class="field-wrap">
      <label>
      Username<span class="req">*</span>
      </label>
      <input  name="username" type="text" required autocomplete="off"/>
      </div>

      <div class="field-wrap">
      <label>
      Password<span class="req">*</span>
      </label>
      <input name="password"  type="password" required autocomplete="off"/>
      </div>
      <button  name="login" type="submit" class="button button-block"/>Log In</button>
      </form>
      <?php
      session_start();
      $mysqli =mysqli_connect("localhost", "root", "");
      mysqli_select_db($mysqli,'car_insurance');
      if(isset($_POST['register']))
      {
      $username= $_POST['username'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $nationality=$_POST['nationality'];
      $text=$_POST['text'];
      $lic_no=$_POST['lic_no'];
      $password=$_POST['password'];
      $query = "SELECT * FROM `owner_det` WHERE `username` = '$username' and `password` = '$password'";
      $result = mysqli_query($mysqli,$query) ;
      $count  = mysqli_num_rows($result);
      if($count != 0)
      echo 'Already Registered';
      else{
      echo 'Creating New User';
      $query = "INSERT INTO `owner_det`(`username`, `dob`, `gender`, `nationality`, `email`, `lic_no`,`password`) VALUES ('$username','$dob','$gender','$nationality','$text','$lic_no','$password')";
      $result = mysqli_query($mysqli,$query) ;
      }
      }else if(isset($_POST['login'])){
      $username= $_POST['username'];
      $password=$_POST['password'];
      $query = "SELECT * FROM `owner_det` WHERE `username` = '$username' and `password` = '$password'";
      $result = mysqli_query($mysqli,$query) ;
      $count  = mysqli_num_rows($result);
      if($res = mysqli_fetch_array($result)){
      $_SESSION['id']=$res['id'];
      $_SESSION['username']=$res['username'];
      $_SESSION['password']=$res['password'];
      }
      if($count != 0)
      header('location: ./home.php');
      else
      echo 'Register first';
      }
      ?>
      </div>

  </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
