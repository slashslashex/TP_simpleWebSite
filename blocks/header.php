<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">SeniorSych</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <?php if ($_COOKIE['user'] ?? '' == 'true'): ?>
                    <a class="nav-link" href="profile.php">Profile</a>
                    <?php else: ?>
                    <a class="nav-link" href="auth.php">Login</a>
                    <?php endif; ?>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" disabled>Search</button>
            </form>
        </div>
    </div>
</nav>
