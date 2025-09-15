<?=$this->extend("layout/master");?>

<?=$this->section("content");?>
<div class="container mt-5 pt-5">

    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?= base_url('sigma/' . $article->photo); ?>" alt="<?= esc($article->title); ?>"
                class="img-fluid rounded" style="max-height: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1><?= esc($article->title); ?></h1>
            <p class="text"><?= date("j.n.Y", $article->date); ?></p>
            <hr>
            <div class="article-text">
                <?= $article->text; ?>
            </div>
        </div>
    </div>

</div>
<?=$this->endSection();?>