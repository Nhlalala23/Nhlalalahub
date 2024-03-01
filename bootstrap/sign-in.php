
<!DOCTYPE html>
<html>
    <head>
        <title>my account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
        
    </head>
    <body>
        <nav class="navbar bg-dark navbar-dark justify-content-center"><!-- Added justify-content-center class -->
            <div class="container">
               
                <a class="navbar-brand" href="#">M Beauty & fashion</a>
                <ul class="navbar-nav flex-row justify-content-between " style="width:300px;">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sign-in.pho">Sign-in</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php">Log-in</a></li>
                
<!--navbar-brand for logo-->
  
            </ul>
        </div>
       </nav> 
       <!--The form-->
        <form action="signDB.php" method="post" class="was-validated">
            <div class="mb-3 mt-š">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Enter your email"> 
                <div class ="valid-feedback">Valid.</div> 
                <div class="invalid-feedback">Please use your correct email</div>
            </div>

            <div class="mb-3"> 
                <label for="password1">Password</label>
                <input type="password" name="pwd" id="paswd" placeholder="Create your password"
                required minlength="8" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title ="must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.">
                <div class ="valid-feedback">Valid.</div> 
                <div class="invalid-feedback">must contain at least one number,one uppercase letter,one lowercase letter,and at least 8 characters.</div>
            </div>

            <div class="mb-3"> 
                <label for="Pasword2" class="form-label">Confirm Pasword</label>
                <input type="password" class="form-input" name="Confirmpwd" id="paswd" placeholder="Create your password" required>
                <div class="invalid-feedback">Your password must be the same with the above password</div>
            </div>


            <div class="form-check mb-3">
                <label for="check">
                    <input class="form-check-input"  type="checkbox" name="check" > Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
        
        <p>Already regestered? <a href="log-in.php">go here!</a></p>
    </body>
</html>