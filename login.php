<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $email = $_POST['mail'];
    $password = $_POST['pass'];



   if(!empty($email)&& !empty($password) && !is_numeric($email))
 {
     $wuery = "select * from form where email= '$email' limit 1";
     $result = mysqli_query($con, $query);

     if($result)
     {
        if($result && mysqli_num_rows($result)>0)
        {
             $user_data = mysqli_fetch_acssoc($result);
            if($user_data['pass'] == $password)
            {
              header("location: index.php");
              die;

            }
        }

      }
      echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
   }
   else{
    echo"<script type='text/javascript'>alert('Successfully Register')</script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="#">Contact</a>
            <button type = "button" class="btnLogin-popup">Login</button>
        
        </nav>
        </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form method="POST">
            <form action="#">
            <div class="input-box">
             
                <span class="icon"></span>
                <input type="email"required>
                <label>Email</label>
              
            </div>
            <div class="input-box">
                <span class-="icon"></span>
                <input type="password" minlength="8" required>
                <label>Password</label>
         </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have an account? <a href="signup.php"class="register-link">Register</a></p>
            </div>
        </form>
    
    </div>

<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $Username = $_POST['U_name'];
    $contact = $_POST['number'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];



   if(!empty($email)&& !empty($password) && !is_numeric($email))
   {
     $query = "insert into form (U_name,number,mail,pass) values ('$Username', '$contact', '$email', '$password')";
     mysqli_query($con, $query);
     echo"<script type='text/javascript'>alert('Successfully Register')</script>";
   }
    else{
     echo"<script type='text/javascript'>alert('Please Enter Some Valid information')</script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button type="button" class="btnLogin-popup">Login</button>
            
        
        </nav>
        </header>
    <div class="wrapper">
        <div class="form-box register">
        <h2>Registration</h2>
        <form action="#">
            <div class="input-box">
         
                <span class="icon"></span>
                <input type="text" name="U_name"required>
                <label>Username</label>
              
            </div>
            <div class="input-box">
         <span class="span-icon"></span>
                <input type="tel" name="number"required>
                <label>Contact</label>
              
            </div>
        <div class="input-box">
         
            <span class="icon"></span>
            <input type="email"name="mail"required>
            <label>Email</label>
          
        </div>
        <div class="input-box">
            <span class-="icon"></span>
            <input type="password"name="pass" minlength="8" required>
            <label>Password</label>
     </div>
        <div class="remember-forgot">
            <label>
                <input type="checkbox">I agree to the terms & condition
            </label>
        </div>
        
        <button type="submit" class="btn">Register</button>
        <div class="login-register">
            <p>Already have an account? <a href="login.php"class="login-link">Login</a></p>
            
        </div>
    </form>

 </div>
 </div>
    <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</div>
</body>
</html>