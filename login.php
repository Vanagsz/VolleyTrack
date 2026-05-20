<?php require("login.class.php")?>
<?php 
    if(isset($_POST['submit'])){
        $user = new LoginUser($_POST['username'], $_POST['password']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="container">
        <form class="login-container" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div id="sign-up">Login</div>
                <div class="forms">
                    <label for="username" class="label">Username</label>
                    <input type="text" placeholder="Enter Username" name="username" required class="input">
                    <label for="password" class="label">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" required class="input">
                </div>
                <div class="submit">
                    <button type="submit" name="submit" class="sign-up-btn">Log-in</button>
                    <p class="error"><?php echo @$user->error ?></p>
                    <p class="success"><?php echo @$user->success ?></p>
                </div>
        </form>
    </div>
</body>
</html>