<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1>Přehled států</h1>

<?= anchor('form-basic-undelete/country/add', 'Přidat stát', ['class' => 'btn btn-primary mb-3']) ?>
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
                        <a href="<?= base_url('form-basic-undelete/country/edit/' . $row->id) ?>" class="btn btn-warning w-100 border border-dark">Edit</a>
                        <button type="button" class="btn btn-danger border border-dark w-100" data-bs-toggle="modal" data-bs-target="#delModal<?= $row->id ?>">Delete</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="delModal<?= $row->id ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete country</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Opravdu chceš smazat stát <?= $row->name ?>?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="<?= base_url('form-basic-undelete/country/delete/' . $row->id) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    <?php
    }

    ?>
</div>
<hr>
<h1 class="mt-5">Smazané státy</h1>

<div class="row">
    <?php
    /** @var array $deletedCountries */
    /** @var object{short_name:string,name:string,info:string} $row */
    foreach ($deletedCountries as $row) {
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
                        <a href="<?= base_url('form-basic-undelete/country/edit/' . $row->id) ?>" class="btn btn-warning w-100 border border-dark">Edit</a>
                        <button type="button" class="btn btn-success border border-dark w-100" data-bs-toggle="modal" data-bs-target="#delModal<?= $row->id ?>">Undelete</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- The Modal -->
        <div class="modal" id="delModal<?= $row->id ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Undelete country</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Opravdu chceš obnovit stát <?= $row->name ?>?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="<?= base_url('form-basic-undelete/country/restore/' . $row->id) ?>" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Undelete</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    <?php
    }

    ?>
</div>


<?= $this->endSection() ?>