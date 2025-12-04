<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="styleRegister.css">
</head>
<body>
    
<div class="form-container">
    <form action="" method="post">
        <h3>REGISTER NOW</h3>
        <input type="text" name="name" required placeholder="Enter name">
        <input type="email" name="email" required placeholder="Enter email">
        <input type="password" name="password" required placeholder="Enter password">
        <input type="cpassword" name="cpassword" required placeholder="Confirm password">
        <input type="file" class"box" accept="image/jpg, image/jpeg, image/png">
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>
</div>

</body>
</html>