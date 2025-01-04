<?php
require_once("./globals.php");
require_once("./db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WyMovies</title>
    <link rel="short icon" href="<?= $BASE_URL ?>assets/img/icons/icon_movie.svg">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.css" integrity="sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/styles.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg p-3">
            <div class="container-fluid navbar-header">
                <a href="<?= $BASE_URL ?>" class="navbar-brand">
                    <img src="<?= $BASE_URL ?>/assets/img/logo/logo_icon.png" alt="logo do site wy, oh my movies" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Meus filmes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Incluir Filme</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center icons-header">
                        <form class="d-flex" role="search" action="" method="GET" id="search-form">
                            <input class="form-control me-2" type="search" name="q" id="search" placeholder="Buscar filmes" aria-label="Search">
                            <button class="btn" type="submit">
                                <span>
                                    <i class="bi bi-search"></i>
                                </span></button>
                        </form>
                        <span>
                            <a href="<?= $BASE_URL ?>auth.php">
                                <i class="bi bi-person"></i>
                            </a>
                        </span>
                        <span>
                            <i class="bi bi-door-closed" title="Sair"></i>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo</h1>
    </div>

    <footer id="footer">

    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.js" integrity="sha512-lsA4IzLaXH0A+uH6JQTuz6DbhqxmVygrWv1CpC/s5vGyMqlnP0y+RYt65vKxbaVq+H6OzbbRtxzf+Zbj20alGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>