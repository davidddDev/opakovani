<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center text-light">Nový článek</h1>

    <div class="card bg-secondary text-light p-4 rounded shadow">
        <form method="post" action="<?= base_url('articles/store') ?>" enctype="multipart/form-data">

            <!-- Název -->
            <div class="mb-3">
                <label class="form-label">Název</label>
                <input type="text" name="title" class="form-control rounded-pill bg-dark text-light border-0" required>
            </div>

            <!-- Text (WYSIWYG editor) -->
            <div class="mb-3">
                <label class="form-label">Text</label>
                <textarea id="editor" name="text" class="form-control bg-dark text-light border-0" rows="10"></textarea>
            </div>

            <!-- Fotka (upload) -->
            <div class="mb-3">
                <label class="form-label">Fotka</label>
                <input type="file" name="photo" class="form-control rounded-pill bg-dark text-light border-0">
            </div>

            <!-- Odkaz -->
            <div class="mb-3">
                <label class="form-label">Odkaz</label>
                <input type="text" name="link" class="form-control rounded-pill bg-dark text-light border-0">
            </div>

            <!-- Publikace -->
            <div class="form-check mb-3">
                <input type="checkbox" name="published" value="1" class="form-check-input" checked>
                <label class="form-check-label">Publikovat</label>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success rounded-pill px-4">Uložit</button>
                <a href="<?= base_url('articles/manage') ?>" class="btn btn-secondary rounded-pill px-4">Zpět</a>
            </div>

        </form>
    </div>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
    })
    .catch(error => { console.error(error); });
</script>

<?=$this->endSection();?>
