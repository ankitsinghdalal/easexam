<?php
// this file handles the new user registration process
// refactoring will be done after project completion
    class Register {
        private $con;

        public function __construct($con) {
            $this->con = $con; // setting up con to the connection variable from config.php
        }

        public function registerHandler() {
            if(isset($_POST['registerButton'])) {
                $uname = mysqli_real_escape_string($this->con, $_POST['uname']);
                $fname = mysqli_real_escape_string($this->con, $_POST['fname']);
                $lname = mysqli_real_escape_string($this->con, $_POST['lname']);
                $email = mysqli_real_escape_string($this->con, $_POST['email']);
                $phoneNumber = mysqli_real_escape_string($this->con, $_POST['phoneNumber']);
                $password = mysqli_real_escape_string($this->con, $_POST['password']);
                $rpassword = mysqli_real_escape_string($this->con, $_POST['rpassword']);

                if($password != $rpassword) {
                    echo "<div class='alert alert-danger'>Your passwords don't match</div>";
                } else if (empty($uname) || empty($fname) || empty($lname) || empty($email) || empty($phoneNumber) || empty($password) || empty($rpassword)) {
                    echo "<div class='alert alert-danger'>One or more fields were left blank</div>";
                } else {
                    // sha1 encryption of the password
                    $passwordHash = sha1($password);

                    // ? is a placeholder as our query will be executed right into the database
                    $sql = "INSERT INTO users (uname, fname, lname, email, phone, password) VALUES (?, ?, ?, ?, ?, ?);";

                    $stmt = mysqli_stmt_init($this->con);

                    // checking if statement was prepared
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "<div class='alert alert-danger'>Statement was not prepared. Undefined SQL error</div>";
                    } else {
                        // while binding params, we use s for a string value to bind our variables at time of execution
                        mysqli_stmt_bind_param($stmt, "ssssss", $uname, $fname, $lname, $email, $phoneNumber, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        // data inserted
                    }

                    header("Location: login.php/?signup=success");
                    echo "You can now Login";
                }
            }
        }
    }
?>