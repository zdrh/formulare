<?php 

if ($alert = session()->getFlashdata('alert')): ?>
    <div
        class="alert alert-<?= esc($alert['type']) ?> alert-dismissible fade show mt-2"
        role="alert"
    >
        <?= esc($alert['message']) ?>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Zavřít"
        ></button>
    </div>
<?php endif; ?>