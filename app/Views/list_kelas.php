<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="user">
    <div class="tambah data"></div>
      <div class="table_user">
        <h1 class="mx-auto p-1 " style="width: 200px;">Tabel Kelas</h1>
        <a href="<?= base_url('kelas/create')?>" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kelas</th>
              <th scope="col">Kapasitas</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
        $no = 1;
        foreach ($kelas as $kelas) { ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td><?= $kelas['kapasitas'] ?></td>

            <td>
              <div class="btn-group">
                <a class="btn btn-info me-2" href="<?= base_url('kelas/'. $kelas['id'])?>">Detail</a>
                <a class="btn btn-warning me-2" href="<?= base_url('kelas/' . $kelas['id'] . '/edit')?>">Edit</a>
                <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method ="post">
                  <input type="hidden" name='_method' value="DELETE">
                  <?= csrf_field() ?>
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>
<?= $this->endSection('content') ?>