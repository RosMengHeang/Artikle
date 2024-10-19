<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form in HTML & CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style for error message */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 0px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="form-area">
        <div class="wrapper">
            <h2>Login</h2>
            <form method="POST" action="login_handler.php">
                <div class="box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class="fa fa-user"></i>
                </div>
                <div class="box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="fa fa-lock"></i>
                </div>
                <?php if (isset($_GET['error'])): ?>
                    <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
                <?php endif; ?>
                <div class="options">
                    <label><input type="checkbox"> Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="SignUp.php">Register</a></p>
        </div>
    </div>
</body>
</html>
