<!DOCTYPE html>
<html>
    <head>
        <title>my web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--css style sheet-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
            .youtube-icon{
                color:red;
                text-shadow: 0 0 5px white;
            }
            .instagram-icon{
                color:rgb(248, 20, 134);
                text-shadow: 0 0 5px white;
             
            }
            .facebook-icon{
                color:blue;
                text-shadow: 0 0 5px white;
            }
            .whatsapp-icon{
                color:lime;
                text-shadow: 0 0 5px white;
            }
            .dropdown-menu{
                min-width: 200px;
                height: 200px;
            }
            .dropdown-item{
                font-size:18px;
                padding:10px 20px;
            }
            
        </style>
    </head>
    <body >
        <!--<nav class="navbar bg-dark navbar-dark justify-content-center">< Added justify-content-center class --
            <div class="container">
               
                <a class="navbar-brand" href="index.php">M Beauty & fashion</a>
                <ul class="navbar-nav flex-row justify-content-between " style="width:300px;">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sign-in.php">Sign-in</a></li>
                    <li class="nav-item"><a class="nav-link" href="log-in.php">Log-in</a></li>
                    <li class="nav-item"><a class="nav-link" href="Admin.php">Admin</a></li>
                </ul>-->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <h1 class="navbar-brand"><!--<a href="index.php">-->M Beauty & Fashion</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign-up.php">Sign-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Log-in.php">Log-in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin_sign.php">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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

       <div class="btn-group justify-content-center" role="group" >
        <button type="button" class ="btn btn-primary"> <a class=" btn beautylink" href=" beauty.php">Beauty</a></button>
        <button type="button" class="btn btn-primary"> <a class=" btn fashionlink" href="fashion.php">Fashion</a></button>

       </div> 
       
<h2 style="text-align: center;">get in touch with us</h2>
<form action="contact_process.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
           

             <div class="container p-3 my-3 border border-secondary text-body bg-light rounded">
             <h3>Send your request</h3>
                <div class="mb-3">
                <label for="text" class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" placeholder="Enter your name">  
            </div>
        </div>

        <div class="mb-3"> 
            <label for="text">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="+27 83 4561 909">

        </div>

        <div class="mb-3"> 
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Your email@gmail.com">
        
     </div>
     <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="5" placeholder="Your Message"></textarea>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
     </div>
        </div>

    </div>
        <div class="col">
            <div class="border p-3">
                    <!-- Content for the second column -->
                    <h3>Connect with us</h3>
                    <p>Email:</p>
                    <p>mbeautyfashion@gmail.com</p>
                    <p>Phone:</p>
                   <p> +27 60 6783 0001</p>
                   <div class="container">
            <div class="mt-3">
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-instagram fa-2x instagram-icon"></i></a>
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-linkedin fa-2x linkedin"></i></a>
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-youtube fa-2x youtube-icon"></i></a>
            <a href="#" class="text-decoration-none mr-3"><i class="fab fa-whatsapp fa-2x whatsapp-icon"></i></a>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
</form>

<!--adding social media icons-->

       

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>  
    </body>
   
</html>