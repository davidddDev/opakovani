<html>
<head>
    <title>Sigma Olomouc</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <style>

        .card {
            position: relative;
            overflow: hidden;
        }
        .card-body {
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?= $this->include("navbar");?>
    <?= $this->renderSection("content"); ?>
</body>
</html>
