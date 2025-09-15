<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Sezóny Sigma Olomouc</h1>

    <?php foreach ($groupedSeasons as $decade => $seasonsObj): ?>
    <div class="mb-5">
        <h3><?= $decade ?>. léta</h3>
        <div class="row">
            <?php foreach ($seasonsObj as $season): ?>
            <div class="col-md-2 mb-2">
                <a href="<?= base_url('season/' . $season->id) ?>" class="btn btn-outline-primary w-100">
                    <?= $season->start ?>/<?= $season->finish ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?=$this->endSection();?>
