<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url() ?>">Formuláře</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
            <?= anchor('form-basic', 'Základní verze', ['class' => 'nav-link']) ?>
        </li>
         <li class="nav-item">
            <?= anchor('form-basic-undelete', 'Základní verze s obnovením smazaných', ['class' => 'nav-link']) ?>
         
        </li>
        <li class="nav-item">
           <?= anchor('form-helper', 'Využití form helperu', ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item">
          <?= anchor('form-alert', 'Formulář s alerty', ['class' => 'nav-link']) ?>
        </li>
      </ul>
    </div>
  </div>
</nav>