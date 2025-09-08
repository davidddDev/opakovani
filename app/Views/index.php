<?=$this->extend("layout/master");?>

<?=$this->section("content");?>
<div class="container mt-5">
    <div class="row g-3">
        <?php if (!empty($articles)) : ?>
        <?php $first = true; ?>
        <?php foreach ($articles as $article) : ?>
        <?php if ($article->id == 2): ?>
        <div class="col-md-12">
            <div class="card text-white"
                style="background-image: url('<?= base_url('sigma/' . $article->photo); ?>'); background-size: cover; background-position: center; height: 400px;">
                <div class="card-body d-flex flex-column justify-content-end">
                    <h4 class="card-title"><?= esc($article->title); ?></h4>
                    <small><?= date("j.n.Y", $article->date); ?></small>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

    </div>
    <?php endif; ?>
</div>
</div>
<?=$this->endSection();?>