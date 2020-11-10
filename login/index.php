<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="side">
            <img src="../images/03.png"" class="background" width="438px" height="580px">
            <h1 class="logo">FIND ME A PG</h1>
            <p class="description">Find A New family<br> in an Unknown Place</p>
        </div>
        <div class="signup"></div>
            <h1 class="login">Login</h1>
            <h1 class="dash">|</h1>
            <h1 ><a class="signin" href="../signup">Sign Up</a></h1>
        <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="email" name="email" placeholder="Enter email/Phone no" required>
            <input type="password" name="pass" placeholder= "Password" class="pass"required>
            <span class="psw"><a href="#">Forgot password?</a></span><br>
            <select  class="login-option">
                <option value="option" class="opt">Select an Option</option>
                <option value="Student" class="stu">Student</option>
                <option value="Teacher" class="teach">Teacher</option>
            </select>
            <label class="check"> Remember Me
                <input type="checkbox" class="checkmark" >    
            </label>
            
            <button class="button">Login</button>
        </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include('../db_connection/connection.php');
            $tablename = 'pgrequirer';
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            if(strcasecmp("pgrequirer","$tablename") == 0){
                $query = "SELECT * FROM `$tablename` WHERE `Email`='$email' AND `Password`='$pass'";
            }
            else if(strcasecmp("pgowners","$tablename") == 0){
                echo "Hello World";
            }
            else {
                echo "last else";
            }
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) == 1)
            {
                //header for redirection to be added
                // header("../admin");
                echo "HEllo";
                header("Location: /../admin/"); 
            }
            else {
                echo '<script>
                        swal({
                            title: "Login Failed!",
                            text: "Please reverify your credentials!",
                            icon: "error",
                            button: "OK",
                        });
                    </script>';
            }
        }
    ?>
</body>
</html>