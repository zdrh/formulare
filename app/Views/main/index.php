<?= $this->extend('layout/template') ?>


<?=  $this->section('content') ?>
<h1>Formuláře</h1>
<p>Protože pro některé studenty je tvroba formulářů komplikovaná, tak jsem kromě návodu na Moodlu udělal ještě i tuto webovku s praktickými ukázkami tvorby formulářů s využitím CodeIgniteru 4.</p>
<h2><a href="<?= base_url('form-basic') ?>">Základní varianta</a></h2>
<p>Tato varianta je udělaná čistě v HTML z hlediska vykreslení formulářů, neobsahuje žádnou validaci, PHP se využívá čistě pro zpracování dat z formláře a uložení do databáze.</p>
<h2><a href="<?= base_url('form-basic-undelete') ?>">Rozšířená základní varianta</a></h2>
<p>Základní varianta vylepšená o možnost undelete, tede o vrácení smzaných položek.</p>

<?= $this->endSection() ?>