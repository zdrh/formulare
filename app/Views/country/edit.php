<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<?php
/** @var App\Models\Country $country */

?>
<h1>Edit country</h1>
<div class="row">
    <form action="<?= base_url('form-basic/country/update') ?>" method="post">
        <div class="col-md-10">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="name" placeholder="Enter name of country" name="name" value="<?= $country->name ?>">
                <label for="name">Name of country</label>
            </div>

            <div class="form-floating ">
                <input type="text" class="form-control" id="short_name" placeholder="Enter short_name of country" name="short_name" value="<?= $country->short_name ?>">
                <label for="short_name">Short name of country</label>
            </div>

            <div class="mb-3 mt-3">
                <label for="description" class="mb-1 ps-1">Description of country</label>
                <textarea class="form-control" id="description" rows="5" name="description"><?= $country->info ?></textarea>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?= $country->id ?>">
            <button type="submit" class="btn btn-primary" name="action" value="edit">Send</button>

        </div>
    </form>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
    tinymce.init({
        license_key: 'gpl',
        promotion: false,
        selector: 'textarea#description',
        height: 500,
        entity_encoding: 'raw',
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount',
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic underline backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
</script>

<?= $this->endSection() ?>