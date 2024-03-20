<!DOCTYPE html>
<html>
<head>
    <title>Login Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="dropdown dropend">
            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">Menu</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Home</a></li>
                <li><a class="dropdown-item" href="sign-up.php">Sign-up</a></li>
                <li><a class="dropdown-item" href="log-in.php">Log-in</a></li>
                <li><a class ="dropdown-item" href="Admin_sign.php">Admin</a></li>
            </ul>
        </div>
    </div>

    <div class="container mt-3">
        <form action="client_login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Create your password" required>
                <div class="invalid-feedback">Password or email is incorrect!</div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>