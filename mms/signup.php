<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        /* Background gradient for the entire page */
        body {
            background: linear-gradient(#C5BAFF, #C4D9FF, #FBFBFB);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        /* Center card with smooth edges and gradient border */
        .card {
            background-color: #C5BAFF;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px #C71585;
            border: 2px solid transparent;
            background-clip: padding-box;
        }

        .card:hover {
            border-image: linear-gradient(to right, #C5BAFF, #E8F9FF) 1;
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        /* Stylish buttons */
        .btn-primary {
            background: linear-gradient(to right, #DB7093, #DB7093);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #FFC0CB, #FFC0CB);
            transform: scale(1.05);
        }

        /* Links with hover effect */
        a {
            color: #6a11cb;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #FFE4E1;
        }

        /* Inputs styling */
        input.form-control {
            border-radius: 10px;
            border: 1px solid #C71544;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input.form-control:focus {
            border-color: #C71585;
            box-shadow: 0 0 8px #C71585;
        }

        /* Title */
        h2 {
            color: #C71585;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-sm p-4" style="width: 400px;">
        <h2 class="text-center mb-4">Register</h2>
        <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
        <form action="register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <!-- Hidden input for dynamic redirect -->
            <input type="hidden" name="redirect" value="login.php">
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="text-center mt-3">
            <p>Already have an account? <a style="color: #FFC0CB" href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
