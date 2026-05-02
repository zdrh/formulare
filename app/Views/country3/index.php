<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1>Přehled států</h1>
<?= anchor('form-helper/country/add', 'Přidat stát', ['class' => 'btn btn-primary mb-3']) ?>
<div class="row">
    <?php
    /** @var array $countries */
    /** @var object{short_name:string,name:string,info:string} $row */
    foreach ($countries as $row) {
    ?>

        <div class="col-xl-3 col-md-4 col-sm-6 mb-3">

            <div class="card h-100 overflow-hidden">

                <div class="flag-box">
                    <span class="fi fi-<?= esc($row->short_name) ?> border border-dark d-block"></span>
                </div>


                <div class="card-body">
                    <h4 class="card-title"><?= esc($row->name) ?></h4>
                    <p class="card-text"><?= truncate_text($row->info) . "." ?></p>

                </div>
                <div class="card-footer bg-transparent border-0 mt-auto">
                    <div class="d-flex gap-2">
                        <a href="<?= base_url('form-basic/country/edit/' . $row->id) ?>" class="btn btn-warning w-100 border border-dark">Edit</a>
                        <button type="button" class="btn btn-danger border border-dark w-100" data-bs-toggle="modal" data-bs-target="#delModal<?= $row->id ?>">Delete</button>
                    </div>
                </div>

            </div>
        </div>
<!-- vyžití helperu na modal -->
        <?= form_modal_delete('delModal' . $row->id, $row->id, "Delete country", "Opravdu chceš smazat stát " . $row->name, "form-helper/country/delete/" . $row->id, "danger", "Delete") ?>
    <?php
    }
    ?>
</div>
<?= $this->endSection() ?>