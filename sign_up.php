<?php
 include('connection.php')
?>
<?php
include('sign_up_conn.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN SHIPPING</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<style>
   .container-fluid{
    
    background-image: url(images/ship3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
   }

   .centered-division{
      background-color: #00008b;
      padding: 20px;
      text-align: center;
      width: 400px; /* Adjust the width as needed */
      max-width: 100%; /* Ensure division does not exceed viewport width */
      opacity: 1;
      border-radius: 1.2cm;

    }
    
    .label {
      margin-bottom: 10px;
      color: #ffffff ;
      
    }
    
    .button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      margin-left:50%;
    }
    p{
        color: #ffffff;
    }

    

</style>
<body >
  <div class="container-fluid">
        <form action="sign_up.php" method="POST">
        <?php
                    if($response)
                    {
                        include('response.php');
                    }
                     if($error)
                   {
                    include('error.php');
                   }?>
                    
    
        <div class="centered-division">
            <h3 style="color: #ffffff; text-align: center; "> <i> Login Page</i></h3>       
            <br>
            
            <br>
                <label for="username" class="label">Username</label>
                <input type="text" name="username"  class="form-control" placeholder="please enter your username">

            <br>
           
                <label for="password"  class="label" style="width: 4cm;">Password</label>
                <input type="password" class="form-control"  name ="password" placeholder="please enter your passsword"> 
            
            <br>
                    <label for="confirm_password"  class="label" style="width: 4cm;">Confirm Password</label>
                    <input type="password" class="form-control" name = "confirm_password" placeholder="please confirm your password">
            <br>
            <button class="button"   type="submit"  name="submit"> <b>Login</b> </button  >
            <br>
            <p>Already have an account?</p><a href="index.php">LOGIN</a>

       
    
    </div>
    </div>
                
                
                
                

           
        
        </form>
  




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>