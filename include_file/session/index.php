<?php
session_start();
echo "TRang chủ";
if(!isset($_SESSION['is_login'])){
    header("Location: login.php");
} else{
    echo $_SESSION['user_login'];
}

?>