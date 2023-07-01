<?php
    unset($_POST['logout']);
    setcookie('user', 'true', time() - 3600, '/');
    header('Location: index.php');
