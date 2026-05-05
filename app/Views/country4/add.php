<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h1>Add country</h1>
<div class="row">
    <form action="<?= base_url('form-alert/country/create') ?>" method="post">
        <div class="col-md-10">
            <?php
            $atributyName = [
                'class' => 'form-control',
                'id'    => 'name',
                'placeholder' => 'Enter name of country'
            ];

            $atributyShortName = [
                'class' => 'form-control',
                'id'    => 'short_name',
                'placeholder' => 'Enter short_name of country'
            ];

            $atributyDescription = [
                'class' => 'form-control',
                'id'    => 'description',
                'placeholder' => 'Enter short_name of country'
            ];
            ?>
            <?= form_input_bs("name", $atributyName, "Name of country") ?>

            <?= form_input_bs("short_name", $atributyShortName, "Short name of country") ?>

            <?= form_textarea_bs('description', 'Description of country') ?>

            <button type="submit" class="btn btn-primary">Send</button>
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