<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Profile</title>
</head>
<?php require_once 'blocks/header.php';

if (!$_COOKIE['user'] ?? '') {
    header('Location: index.php');
}
?>
<body>
<div class="container mt-5">
    <br>
    <h3 class="mb-5" style="text-align: center">Your profile</h3>
    <form action="logout.php">
    <button class="mybutton" name="logout">Logout</button>
    </form>
</div>
<?php require_once 'blocks/footer.php' ?>
</body>
</html>
