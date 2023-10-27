<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">




  </head>
  <body>
<div class="sidebar">
  <div class="sidebar-header">
        <h3><u>Data Mahasiswa.</u></h3>
      </div>
    <a class="nav-link" href="<?= base_url('/user')?>">User<hr></a>
    <a class="nav-link" href="<?= base_url('/kelas')?>">Kelas<hr></a>
</div>
    <?= $this->renderSection('content') ?>
  </body>
</html>
