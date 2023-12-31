<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
</head>
<body>

    <header class="container-fluid bg-dark text-light py-3">
        <div class="container">
            <h1>Registration Page</h1>
        </div>
    </header>

    <div class="container mt-4">
        <form action="" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
