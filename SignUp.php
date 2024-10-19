<!doctype html>
<html lang="en">
<!-- divinectorweb.com -->    
<head>
    <meta charset="UTF-8">  
    <title>Login Form in HTML & CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="form-area">
        <div class="wrapper">
            <h2>Create Account</h2>       
            <form method="POST" action="signup_handler.php">             
                <div class="box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class="fa fa-user"></i>
                </div>
                <div class="box">
                    <input type="email" placeholder="example@gmail.com" name="email" required>
                    <i class="fa fa-unlock"></i>
                </div>
                <div class="box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="fa fa-lock"></i>
                </div>
                <button type="submit">SignUP</button>
            </form>
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>
    </div>
    
    
    
</body>
</html>
