<?php
    include "db/config.php";
    include "classes/Login.php";
    $login = new Login($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to Ease Exam</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <form method="post" class="form-group">
        <h2>Login to access Ease Exam</h2> <hr>
        <?php $login->loginHandler(); ?>
        <label for="uname">Enter your username</label>
        <input type="text" name="uname" placeholder="Enter your username" class="form-control"><br>

        <label for="password">Enter your password</label>
        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>

        <input type="submit" name="loginButton" class="ourOwnButton" style="border: none;" value="Login"> &nbsp; &nbsp; <a href="register.php">I don't have an account</a> &nbsp; &nbsp; <a href="forgotpassword.php">I forgot my password</a><br>
    </form>
</div>
<?php include "includes/footer.php"; ?>