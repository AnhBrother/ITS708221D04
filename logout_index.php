<?php
    session_start();
    session_unset(); 
    session_destroy(); 
    header("Location: https://brothernyn.000webhostapp.com/index.php");
?>