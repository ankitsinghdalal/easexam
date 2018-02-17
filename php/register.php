<?php 

    include "db/config.php"; 
    include "classes/Register.php";
    // instance of Register class
    $register = new Register($connection); // this connection argument get caught by construct function of Register class

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register to Ease Exam</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container col-md-6" style="margin-top: 30px;">
    <form method="post" class="form-group">
        <h2>Register to Ease Exam</h2> <hr>
        <?php $register->registerHandler();  ?>
        <label for="uname">Enter your username</label>
        <input type="text" name="uname" placeholder="Username will be used to login" class="form-control"><br>

        <label for="fname">Enter your first name</label>
        <input type="text" name="fname" placeholder="Your first name" class="form-control"><br>

        <label for="lname">Enter your last name</label>
        <input type="text" name="lname" placeholder="Your last name" class="form-control"><br>

        <label for="email">Enter your email</label>
        <input type="email" name="email" placeholder="Your email" class="form-control"><br>

        <label for="phoneNumber">Enter your Phone number</label>
        <input type="number" name="phoneNumber" placeholder="phone number without country code" class="form-control"><br>

        <label for="password">Enter your password</label>
        <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>

        <label for="rpassword">Repeat password</label>
        <input type="password" name="rpassword" placeholder="repeat your password" class="form-control"><br>

        <input type="submit" name="registerButton" class="ourOwnButton" style="border: none;" value="Register"> &nbsp; &nbsp; <a href="login.php">I already have an account</a><br>
    </form>
</div>
<?php include "includes/footer.php"; ?>