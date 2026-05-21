<?php require("register.class.php")?>

<?php 
    if(isset($_POST['submit'])){
        $user = new RegisterUser($_POST['username'], $_POST['password']);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Sign-up</title>
</head>
<body>
    <div class="container">
        <form class="login-container" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div id="sign-up">Sign-up</div>
                <div class="forms">
                    <label for="username" class="label">Username</label>
                    <input type="text" placeholder="Enter a unique username" name="username" required class="input">
                    <label for="password" class="label">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" required class="input">
                </div>
                <div class="submit">
                    <button type="submit" name="submit" class="sign-up-btn">Sign-up</button>
                    <a href="login.php" class="log-in-btn">Log-in</a>
                    <p class="error"><?php echo @$user->error ?></p>
                    <p class="success"><?php echo @$user->success ?></p>
                </div>
        </form>
    </div>
</body>
</html>
