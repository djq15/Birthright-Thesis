<?php

    $con=mysqli_connect('localhost','root','ieti19','ieti_db');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>