<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="navbar">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            Prestige Beauty
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupported">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">
    Home
</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'services.php' ? 'active' : '' ?>" href="services.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'gallery.php' ? 'active' : '' ?>" href="gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
                </li>

            </ul>

        </div>

    </div>
</nav>