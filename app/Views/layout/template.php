<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuláře</title>
    <?= $this->include('layout/css') ?>
</head>

<body>
    <?= $this->include('layout/navbar') ?>
    <div class="container">
        <?= $this->include('layout/alert') ?>
        <?= $this->renderSection('content') ?>
    </div>
    <?= $this->include('layout/js') ?>
    <?= $this->renderSection('script') ?>
</body>

</html>