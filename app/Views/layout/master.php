<html>
    <head>
        <title>Sigma Olomouc</title>
        <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <style>
            .bg-purple {
                background-color: #7A288A;
            }
        </style>
    </head>
    <body>
        <?= $this->include("navbar");?>
        <?= $this->renderSection("content"); ?>
    </body>
</html>