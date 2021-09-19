<?php

    $mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db');

    if(!$mysqli)
    {
        die(' Please Check Your Connection'.mysqli_error($mysqli));
    }
?>