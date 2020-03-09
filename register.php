<?php include('function.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>
    <div class="index-cont media">
        <div class="reg-cont">
            <form id='register' action='register.php' method='post' accept-charset='UTF-8'>
                <fieldset>
                    <legend>Register</legend>
                    <div class="input-group">
                        <label for='name'>Your Name: </label>
                        <input type='text' name='name' id='name' maxlength="50" /></div>
                    <div class="input-group">
                        <label for='email'>Email Address:</label>
                        <input type='text' name='email' id='email' maxlength="50" /></div>
                    <div class="input-group">
                        <label for='password'>Password:</label>
                        <input type='password' name='password' id='password' maxlength="50" />
                    </div>
                    <button class="btn-main" type='submit' name='reg_user'>SUBMIT</button>
                </fieldset>
            </form>
        </div>
        <div class="login-cont">
            <fieldset>
                <legend>Log in</legend>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="text" name="email">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <button class="btn-main" type="submit" name="login_user">LOGIN</button>
            </fieldset>
        </div>
    </div>

</body>

</html>