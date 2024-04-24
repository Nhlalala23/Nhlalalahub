<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="bootstrap.min.css">

    </head>
    <body>
        <div class ="container mt-5" >
            <h2>get in touch with us!</h2>
            <form action="formHandler.jsp " method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required><br><br>
                    
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required><br><br>
                    
                    <label for="Message" class="form-label">Message:</label>
                    <textarea name="msg" id="msq" cols="30" rows="10" class="form-control" required></textarea><br><br>

                    <button  type="submit"class="btn ntn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</html>