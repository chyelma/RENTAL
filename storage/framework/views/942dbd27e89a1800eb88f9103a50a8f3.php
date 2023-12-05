<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f0f5f5; /* Soft blue-gray color for a calming effect */
            background: url('login6.avif');
            background-size: cover;
        }

        .login-container {
            margin-top: 100px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Set the maximum width for the card */
            margin: 0 auto; /* Center the card horizontally */
        }

        .card-header {
            background-color: #2c3e50; /* Deep blue for contrast */
            color: #fff;
            text-align: center;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:hover {
            border-color: #2c3e50; /* Purple color on hover */
        }

        .btn-primary {
            background-color: #2c3e50; /* Matching color for the button */
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #1a252f; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Login</h1>
                    </div>
                    <div class="card-body">
                        <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(Session::get('error')); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Type Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                        <p class="account">Don't Have An Account? <a href="/register">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\tutorial3\resources\views/login.blade.php ENDPATH**/ ?>