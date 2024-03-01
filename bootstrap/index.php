<!DOCTYPE html>
<html>
    <head>
        <title>my web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
        
       <style>
            body{
               /* background-image:url("beauty.jpg");*/
                background-size: cover;
                background-size: cover;
                 background-position: center;
                height: 100vh; 
                margin: 0;
                padding: 0;

            }
            div h2{
                font-weight: bolder;
            }
            image{
                display: block;
                /*margin-left: 50%;*/
                margin-right: 50%;
                
            }
        </style>
    </head>
    <body >
        <nav class="navbar bg-dark navbar-dark justify-content-center"><!-- Added justify-content-center class -->
            <div class="container">
               
                <a class="navbar-brand" href="#">M Beauty & fashion</a>
                <ul class="navbar-nav flex-row justify-content-between " style="width:300px;">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sign-in.php">Sign-in</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php">Log-in</a></li>
                
<!--navbar-brand for logo-->
  
            </ul>
        </div>
       </nav> 
        <div class="container p-5 my-5 border bg-success ">
            <h2>Welcome to our M beauty & fashion.</h2>
            <p>We are all about beauty and fashion. Were all the beauty gurus and fashion designers and show off their work and market themselves through our platform.</p>
        </div>
        <!--<div class="container p-5 my-5 border ">
            <img class="img-fluid" src="beauty.jpg" alt="beauty" width="500" height="500" >
            <img class="img-fluid" src="fashion.webp" alt="fashion" width="300" height="300">
        </div>
       --<img class="img-fluid" src="beauty.jpg" alt="beauty" >
        <img src="fashion.webp" alt="fashion" width="500" height="500" >-->
       
<h2 style="text-align: center;">get in touch with us</h2>
<form action="">
    <div class="container p-5 my-5 border text-body bg-light ">
        <div class="mb-3">
            <label for="text" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">  
        </div>
    
        <div class="mb-3"> 
            <label for="text">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="+27 83 4561 909">
    
        </div>
    
        <div class="mb-3"> 
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Youremail@gmail.com">
            
        </div>
        <div class="form-message">
            <label for="message"> Text</label>
            <textarea class="form-control " name="message" placeholder="Your Message"></textarea><br>
            
        </div>
        <div >
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>
    </div>
   

</form>



    </body>
   
</html>