<!DOCTYPE html>
<head>
    <title>my web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   

</head>
<style>
    body{
       /* background-color:teal;*/
    }
    .border{
        width:500px;
        height:400px;
    }
</style>
<body>
    <h1>M Beauty & Fashion</h1>

    <div class="dropdown dropend">
        <button type="button" class="btn btn-dark dropdown" data-bs-toggle ="dropdown">Menu</button>
            <ul class="dropdown-menu">
                <li><a class ="dropdown-item" href="index.php">Home</a></li>
                <li><a class ="dropdown-item" href="sign-up.php">Sign-in</a></li>
                <li><a class ="dropdown-item" href="Log-in.php">Log-in</a></li>
                <li><a class ="dropdown-item" href="Admin.php">Admin</a></li>
            </ul> 
    </div>
    

    <p>Please create your admin account.</p>
    <p>If you are not admin please leave this page <a href="index.php"> click here</a></p>

   <form action="adm_process.php" method="post">
    <div class="container border">
       <div class="container mb-3 mt-3">
           <label for="Username" class="form-label">Username</label> <!--can be work Id -->
           <input type="text" class="form-control" name="username" placeholder="Enter your Username"> 
           <div class ="valid-feedback">Valid.</div> 
           <div class="invalid-feedback">This field is required</div>
       </div>

   <div class=" container  mb-3 mt-3">
       <label for="email" class="form-label">Email</label> <!--can be work Id -->
       <input type="text" class="form-control" name="Email" placeholder="Enter your email"> 
       <div class ="valid-feedback">Valid.</div> 
       <div class="invalid-feedback">This field is required</div>
   </div>

   <div class= " container mb-3"> 
           <label for="password1">Password</label>
           <input type="password" name="password" id="paswd" placeholder="Create your password"
           required minlength="8" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
           title ="must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.">
           <div class ="valid-feedback">Valid.</div> 
           <div class="invalid-feedback">must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.</div>
       </div>

       <div class="container mb-3"> 
           <label for="Pasword2" class="form-label">Confirm Pasword</label>
           <input type="password" class="form-input" name="Confirmpwd" id="paswd" placeholder="Create your password" required>
           <div class="invalid-feedback">Your password must be the same with the above password</div>
       </div>

   <button type="submit" class="btn btn-primary">Submit</button>
   </div>
    </form>

    



    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>  
</body>

</html>