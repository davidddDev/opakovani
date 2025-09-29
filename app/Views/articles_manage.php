<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center text-light">Administrace článků</h1>

    <div class="text-center mb-4">
        <a href="<?= base_url('articles/create'); ?>" class="btn btn-primary btn-lg rounded-pill">
            + Nový článek
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover align-middle rounded">
            <thead class="table-secondary text-dark">
                <tr>
                    <th>ID</th>
                    <th>Název</th>
                    <th>Datum</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($articles as $article): ?>
                <tr class="bg-dark">
                    <td><?= $article->id ?></td>
                    <td><?= $article->title ?></td>
                    <td><?= date("j.n.Y", $article->date) ?></td>
                    <td>
                        <a href="<?= base_url('articles/edit/' . $article->id); ?>" 
                           class="btn btn-warning btn-sm rounded-pill">
                            Editovat
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?=$this->endSection();?>
