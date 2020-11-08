<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/signup.css" type="text/css">
</head>

<body>
    <div class="wrapper">
        <div class="side">
            <img src="../images/03.png" class="background" width="438px" height="580px">
            <h1 class="logo">FIND ME A PG</h1>
            <p class="description">Find A New family<br> in an Unknown Place</p>
        </div>
        <div class="signup"></div>
        <h1 ><a class="login" href="../login">Login</a></h1>
        <h1 class="dash">|</h1>
        <h1 class="signin">Sign Up</h1>
        <form class="form">
            <input type="email" placeholder="Enter Name/Phone no" required>
            <input type="email" placeholder="Enter email/Phone no" required>
            <input type="password" placeholder= "Password" class="pass"required>
            <input type="password" placeholder="Confirm Password" class="repeat" required>
            <select >
            <option value="option" class="opt">Select an Option</option>
            <option value="Student" class="stu">Student</option>
            <option value="Teacher" class="teach">Teacher</option>
            </select>
            <input type="file" class="choose-file">
            <label class="check"> I Agree to all Terms and Conditions
            <input type="checkbox" class="checkmark" >
            </label>
            <button class="button">Sign Up</button>
        </form>
    </div>


    <?php
        include('./connection.php');
        $tablename = $_GET['tablename'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        //variables if required more
        if(strcasecmp("pgrequirer","$tablename") == 0){
            $query = "INSERT INTO `$tablename` VALUES(NULL,'$name','$phone','$email','$pass','$address')";
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
            echo "added";
        }
        else {
            echo "not added";
        }
    ?>
</body>

</html>