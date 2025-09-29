<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<div class="container mt-5 pt-5">
    <h1 class="text-center mb-4">Přehled sezón</h1>

    <?php foreach ($groupedSeasons as $decade => $seasonsObj): ?>
    <div class="mb-5">
        <h3 class="mb-3">Desetiletí <?= $decade ?></h3>
        <div class="row g-2">
            <?php foreach ($seasonsObj as $season): ?>
            <div class="col-6 col-md-2">
                <a href="<?= base_url('season/' . $season->id) ?>" 
                   class="btn btn-light w-100 fw-bold shadow-sm" 
                   style="border-radius: 12px; color: #333; background: #f8f9fa;">
                    <?= $season->start ?>/<?= $season->finish ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?=$this->endSection();?>
