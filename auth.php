<?php
    setcookie('user', 'true', time() + 3600, '/');
    header('Location: index.php');
//    print_r($_COOKIE);
?>