<?=$this->extend("layout/master");?>

<?=$this->section("content");?>
<div class="container mt-5 pt-5">
    <div class="row">

    <div class="col-md-6">
    <?php foreach ($articles as $key => $article) : ?>
    <?php if ($key == 0) : ?>
    <a href="<?= base_url('article/' . $article->id); ?>" class="text-decoration-none">
        <div class="card text-white position-relative overflow-hidden"
            style="border-radius: 15px; height: 430px; margin-bottom: 20px;"> 
            <div class="card-img" style="background-image: url('<?= base_url('sigma/' . $article->photo); ?>'); 
                                background-size: cover; 
                                background-position: center; 
                                height: 100%;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>
            <div class="card-body position-absolute bottom-0 w-100">
                <h3 class="card-title"><?= esc($article->title); ?></h3>
                <small><?= date("j.n.Y", $article->date); ?></small>
            </div>
        </div>
    </a>
    <?php endif; ?>
    <?php endforeach; ?>
</div>


        <div class="col-md-6">
            <div class="row">
                <?php foreach ($articles as $key => $article) : ?>
                <?php if ($key > 0) : ?>
                <div class="col-md-6">
                    <a href="<?= base_url('article/' . $article->id); ?>" class="text-decoration-none">

                        <div class="card mb-2 text-white position-relative overflow-hidden"
                            style="border-radius: 15px;">
                            <div class="card-img" style="background-image: url('<?= base_url('sigma/' . $article->photo); ?>'); 
                                                background-size: cover; 
                                                background-position: center; 
                                                height: 210px;">
                            </div>
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;">
                            </div>
                            <div class="card-body position-absolute bottom-0 w-100">
                                <h5 class="card-title"><?= esc($article->title); ?></h5>
                                <small><?= date("j.n.Y", $article->date); ?></small>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<?=$this->endSection();?>