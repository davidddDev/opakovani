<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<div class="container mt-5 pt-5">
    <h1>Sezóna <?= $season->start ?>/<?= $season->finish ?></h1>
    <hr>
    <h3>Soutěže:</h3>
    <ul>
        <?php foreach ($competitions as $competition): ?>
            <li><?= esc($competition->league_name) ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?=$this->endSection();?>
