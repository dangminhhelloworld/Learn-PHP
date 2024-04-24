<?php

    ob_start();
    session_start();
    $_SESSION['is_login'] = true;
    $_SESSION['user_login'] = 'minh';

    header("Location: index.php");


?>