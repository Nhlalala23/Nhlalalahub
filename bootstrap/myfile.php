

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form action="signDB.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
            

            <div class="container p-3 my-3 border border-secondary text-body bg-light rounded">
            <div class="mb-3">
            <label for="text" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">  
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

                </div>
            </div>
        </div>
    </div>
</form>