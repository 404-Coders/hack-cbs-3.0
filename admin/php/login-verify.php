<?php
    include('./connection.php');
    $tablename = $_GET['tablename'];
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
        echo "added";
    }
    else {
        echo "not added";
    }
?>