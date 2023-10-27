<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="user">
    <div class="tambah data"></div>
      <div class="table_user">
        <h1 class="mx-auto p-1 " style="width: 200px;">Tabel User</h1>
        <a href="<?= base_url('user/create')?>" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NPM</th>
              <th>Kelas</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <th><?= $no++ ?></th>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
              <div class="btn-group">
                <a class="btn btn-info me-2" href="<?= base_url('user/'. $user['id'])?>">Detail</a>
                <a class="btn btn-warning me-2" href="<?= base_url('user/' . $user['id'] . '/edit')?>">Edit</a>
                <form action="<?= base_url('user/' . $user['id']) ?>" method ="post">
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