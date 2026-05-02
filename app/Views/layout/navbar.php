<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>">Formuláře</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php
            /** @var int $type */
          if ($type == 1) {
            echo anchor('form-basic', 'Základní verze', ['class' => 'nav-link active']);
          } else {
            echo anchor('form-basic', 'Základní verze', ['class' => 'nav-link']);
          }
          ?>

        </li>
        <li class="nav-item">
          <?php
           
          if ($type == 2) {
            echo anchor('form-basic-undelete', 'Základní verze s obnovením smazaných', ['class' => 'nav-link active']);
          } else {
            echo anchor('form-basic-undelete', 'Základní verze s obnovením smazaných', ['class' => 'nav-link']);
          }
          ?>

        </li>
        <li class="nav-item">
           <?php
           
          if ($type == 3) {
            echo anchor('form-helper', 'Form helper', ['class' => 'nav-link active']);
          } else {
            echo anchor('form-helper', 'Form helper', ['class' => 'nav-link']);
          }
          ?>
        </li>
        <li class="nav-item">
           <?php
           
          if ($type == 4) {
            echo anchor('form-alert', 'Verze s alerty', ['class' => 'nav-link active']);
          } else {
            echo anchor('form-alert', 'Verze s alerty', ['class' => 'nav-link']);
          }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>