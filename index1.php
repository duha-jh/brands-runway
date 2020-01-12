<?php
session_start();
$_SESSION["login"] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $conn = mysqli_connect('db', 'duha', '123qwe', "myDb");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT email From login where email='".$_POST['email']."' and password='".$_POST['password']."'";
  $result = mysqli_query($conn,$sql);
  $rowcount = mysqli_num_rows($result);
  if ($rowcount > 0)
  {
    $_SESSION["login"] = true;
    echo "<script>window.top.location.href = \"/BrandsRunway-admin.php\";</script>";
  }
  else
  {
    echo '<script language="javascript">';
    echo 'alert("the email or password is wrong")';
    echo '</script>';
  }
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login/Signup Page </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:200,400,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:300,400'>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'><link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="main-page">

  <div class="smooth login" id="login">
  <h1 class="login__header header"></h1>
  <h1 class="login__header header">Welcome to Brands Runway</h1>
  <p class="login__byline">It's good to see you, come in using your favourite social network </p>
  <div class="social-media__container">
    <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
    </span>  
     <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
    </span>   
    <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
    </span>
  </div>
  <fieldset class="form">
    <legend class="form__legend">OR</legend>
  <form name="input" action="" class="form__body form-login" method="POST">  
    <input class="form__input" type="email" id="email" name="email" placeholder="email">
    <input class="form__input" type="password" id="password" name="password" placeholder="password">   
     <!-- <button class="btn" type="submit">Sign in</button> -->
     <input type="submit" class="btn" value="Sign in" name="sub"/>
  </form>  
    </fieldset>
</div>

  <div class="switch">
  <div class="switch__text-container"  id="switch-text">
    <h1 class="switch__header header">Not yet a member?</h1>
    <p>Sign up and discover what we can do for you</p>
  </div>
   <button class="btn-white btn" id="switch-button">Sign up</button>
</div>
  
    <div class="smooth signup hide-view" id="signup">
  <h1 class="signup__header header"></h1>
    <h1 class="signup__header header">Create a new account</h1>
  <p class="signup__byline">You can use your favourite social network</p>
  <div class="social-media__container">
    <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
    </span>  
     <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
    </span>   
    <span class="fa-stack fa-lg social-media__icon icon">
    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
    <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
    </span>
  </div>
  <fieldset class="form">
    <legend class="form__legend">OR</legend>
  <form action="" class="form__body form-login">
    <div class="input__group">
        <input class="form__input form__input-half" type="text" placeholder="first name">
        <input class="form__input form__input-half" type="text" placeholder="last name">
    </div>
    <div class="input__group">
       <input class="form__input form__input-half" type="email" placeholder="email">
       <input class="form__input form__input-half" type="password" placeholder="password">      
    </div>
    <div class="input__group">
      <input class="form__input-checkbox" type="checkbox"> I have read the <a href="#">terms and conditions</a>
    </div>
     <button class="btn" type="submit">Sign up</button> 
  </form>  
    </fieldset>
</div>
  
</div>
<!-- partial -->
  <script  src="./script1.js"></script>

</body>
</html>
