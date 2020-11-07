<?php
    $conn = mysqli_connect('localhost','root','','pgfinder');
    if(mysqli_connect_errno())
    {
        echo mysqli_connect_error();
    }
?>