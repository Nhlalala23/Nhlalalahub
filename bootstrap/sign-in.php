
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
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign-in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Log-in</a></li>
                
<!--navbar-brand for logo-->
  
            </ul>
        </div>
       </nav> 
       <!--The form-->
        <form action="form.php">
            <div class="mb-3 mt-š">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name='Email' placeholder="Enter your email">  
            </div>

            <div class="mb-3"> 
                <label for="password">Password</label>
                <input type="password" name="pwd" id="paswd" placeholder="Enter your password">
            </div>

            <div class="form-check mb-3">
                <label for="check">
                    <input class="form-check-input"  type="checkbox" name="check" > Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>   
    </body>
</html>