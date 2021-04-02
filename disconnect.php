<?php
    session_start();
    $_SESSION['Logged'] = 0;
    session_destroy();
    header('Location: index.php');
?>