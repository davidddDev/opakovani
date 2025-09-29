<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Olomouc</title>
    <link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <style>
        body {
            background-color: #2c2c2e; /* světlejší tmavé pozadí */
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background-color: #3a3a3f; /* výraznější navbar */
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            background-color: #3a3a3f;
            color: #f0f0f0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img {
            border-radius: 15px 15px 0 0;
        }

        .card-overlay {
            background: rgba(0, 0, 0, 0.4);
        }

        .btn-primary {
            border-radius: 50px;
        }

        .btn-outline-primary {
            color: #0d6efd;
            border-color: #0d6efd;
            border-radius: 50px;
        }

        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: #fff;
        }

        table {
            border-radius: 10px;
            overflow: hidden;
            background-color: #3a3a3f;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        table thead {
            background-color: #4a4a50;
            color: #fff;
        }

        table tbody tr:hover {
            background-color: #505055;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?= base_url('index'); ?>">Sigma Olomouc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('articles'); ?>">Články</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('seasons'); ?>">Sezóny</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="<?= base_url('articles/manage'); ?>">Administrace</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="pt-5 mt-4">
    <?= $this->renderSection('content') ?>
</main>

<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
