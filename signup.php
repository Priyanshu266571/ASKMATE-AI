


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
            <button class="btnLogin-popup">Login</button>
            
        
        </nav>
        </header>
    <div class="wrapper">
        <div class="form-box register">
        <h2>Registration</h2>
        <form method="POST">
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
        
 </body>
 </html>