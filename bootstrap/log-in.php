<!DOCTYPE html>
<html>
    <head>
        <title> log-in Account</title>
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
                </ul>

            </div>
        </nav>

        <form action="login_process.php" method ="post">

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
        
    </body>

      
</html>
                