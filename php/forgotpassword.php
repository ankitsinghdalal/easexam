<!--

PHP code deleted because of vague errors. Look into it

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot password?</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;" id="first">
    <form method="post" class="form-group">
        <h2 id="passwordHeading">Forgot your password?</h2><p id="passwordPara">Don't worry! we got your back <hr>
        <div id="enterUsername">
            <label for="uname">Enter your username</label>
            <input type="text" name="uname" placeholder="Enter your username" class="form-control"><br>
        </div>

        <div id="enterEmail" style="display: none;">
            <label for="email">Enter your email</label>
            <input type="email" name="email" placeholder="Enter your email" class="form-control"><br>
        </div>

        <input type="submit" name="resetPasswordButton" class="ourOwnButton" style="border: none;" value="Reset password"> &nbsp; <input type="submit" id="forgotUsernameButton" name="forgotUsernameButton" class="ourOwnButton" style="border: none;" value="I don't remember my username"> &nbsp; <a href="login.php">I figured out my password and don't need to reset it now</a><br>
    </form>
</div>

<div id="second" style="display: none">
<p>Test</p>
</div>
<?php include "includes/footer.php"; ?>