<?php
include("server.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
  </head>
  <style>

    body{
      background-color: teal;
       background: url('images/back2.jpg') no-repeat;
       background-size: cover;
       display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
       
}
#form{
       top: 5px;
       background-color: chartreuse;
       width: 30%;
       margin:  auto;
       border: 6px solid rgba(255, 255, 255, .2);
       padding: 10px;
       border-radius: 10px;
      
}
h1
{
text-align: center;
}

h3
{
text-align: center;
}
input
{
       width: 90%;
       border-radius: 4px;
       border: 3px solid #f6efef;
       padding: 5px;
}
#btn
{
       width: 100%;
       color: white;
       background-color: rgb(108,22,189);
       padding: 10px;
       font-size: large;
       border-radius: 10px;
}
@media screen and (max-width:700px){
       #form{
              width:65%;
              padding: 40px;
       }
}

  </style>
  <body>
  
     <div id="form">
       <h3 id="heading">Create your Account</h3><br>
       <form name="form" action="signup.php" method="POST">
              <i class="fa-solid fa-user"></i>
              <input type="text" id="name" name="name" placeholder="Your name" required><br><br>
              <i class="fa-solid fa-user"></i>
              <input type="text" id="user" name="user" placeholder="Enter Username" required><br><br>
              <i class="fa-solid fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Enter email address" required><br><br>
              <i class="fa-solid fa-user"></i>
              <input type="phone" id="phone" name="phone" placeholder="Phone Number" required><br><br>
              <i class="fa-solid fa-lock"></i>
              <input type="password" id="pass" name="pass" placeholder="Create password" required><br><br>
              <i class="fa-solid fa-lock"></i>
              <input type="password" id="cpass" name="cpass" placeholder="Confirm password" required><br><br>
              <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
             <input type="submit" id="btn" value="Create Your Account" name="submit"/>

             <p>
  		Already a member? <a href="signin.php">Sign in</a>
  	</p>

       </form>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>