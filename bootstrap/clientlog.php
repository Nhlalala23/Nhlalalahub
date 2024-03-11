<!DOCTYPE html>
<html>
    <head>
        <title> log-in Account</title>
        <meta name="viewport" content="width=device, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <div class="container mt-3">
                    <div class="dropdown dropend">
                        <button type="button" class="btn btn-dark dropdown" data-bs-toggle ="dropdown">Menu</button>
                        <ul class="dropdown-menu">
                            <li><a class ="dropdown-item" href="index.php">Home</a></li>
                            <li><a class ="dropdown-item" href="sign-up.php">Sign-in</a></li>
                            <li><a class ="dropdown-item" href="Log-in.php">Log-in</a></li>
                            <li><a class ="dropdown-item" href="Admin.php">Admin</a></li>



                        </ul>
          
   
                    </div> 
</div>
<form action="Admin.php" method ="post">

<div class="mb-3 mt-3">
       <label for="email" class="form-label">Email</label>
       <input type="email" class="form-control" name="Email" placeholder="Enter your email" required> 
       <!--<div class ="valid-feedback">Valid.</div> -->
      <!-- <div class="invalid-feedback">Please use your correct email</div>-->
   </div>

   <div class="mb-3"> 
       <label for="password1">Password</label>
       <input type="password" name="pwd" id="paswd" placeholder="Create your password">
       
       <div class="invalid-feedback">Password or email is incorrect!</div>
   </div>

   <button type="submit" class="btn btn-primary">Login</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>