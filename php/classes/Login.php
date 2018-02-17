<?php

    class Login {
        private $con;

        public function __construct($con) {
            $this->con = $con;
        }

        public function loginHandler() {
            /*if(isset($_GET['signup'])) {
                echo "<div class='alert alert success'>You can now login</div>";
            } this needs some work to be done 
        } */

            if(isset($_POST['loginButton'])) {
                $uname = mysqli_real_escape_string($this->con, $_POST['uname']);
                $password = mysqli_real_escape_string($this->con, $_POST['password']);

                if(empty($uname) || empty($password)) {
                    echo "<div class='alert alert danger'>Please enter your details to login</div>";
                } else {
                    $passwordHash = sha1($password);
                    $sql = "SELECT * FROM users WHERE uname=? AND password=?";

                    $stmt = mysqli_stmt_init($this->con);

                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "<div class='alert alert danger'>Login failed. SQL error</div>";
                    } else {
                        mysqli_stmt_bind_param($stmt, "ss", $uname, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        // login success
                        echo $stmt;
                     //   header("Location: welcome.php");
                    }
                }
            }
        }
    }
?>
