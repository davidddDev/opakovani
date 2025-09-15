<?=$this->extend("layout/master");?>

<?=$this->section("content");?>
<div class="container mt-5 pt-5">
    <div class="row">
        <?php foreach ($articles as $article) : ?>
        <div class="col-md-4 mb-3">
            <a href="<?= base_url('article/' . $article->id); ?>" class="text-decoration-none">
                <div class="card text-white position-relative overflow-hidden" style="border-radius: 15px;">
                    <div class="card-img" style="background-image: url('<?= base_url('sigma/' . $article->photo); ?>'); 
                                    background-size: cover; 
                                    background-position: center; 
                                    height: 200px;">
                    </div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>
                    <div class="card-body position-absolute bottom-0 w-100">
                        <h5 class="card-title"><?= esc($article->title); ?></h5>
                        <small><?= date("j.n.Y", $article->date); ?></small>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->endSection();?>
