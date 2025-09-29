<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('index'); ?>">Sigma Olomouc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('articles'); ?>">Články</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('seasons'); ?>">Sezóny</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('articles/manage'); ?>">Administrace</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
