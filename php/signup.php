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