<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Contact form</title>
</head>
<body>
    <?php require_once 'blocks/header.php' ?>
    <div class="container mt-5">
        <br>
        <h3 class="mb-3">Contact form</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" required placeholder="Enter your email" class="form-control">
            <br>
            <textarea name="message" required class="form-control" placeholder="Enter your message"></textarea>
            <br>
            <button class="btn btn-success mb-4">Send</button>
            <?php
            if ($_SESSION['msg'] ?? '')
            {
                echo '<p class="msg">'.$_SESSION['msg'].'</p>';
            }
            unset($_SESSION['msg']);
            ?>
        </form>
    </div>
    <?php require_once 'blocks/footer.php' ?>
</body>
</html>