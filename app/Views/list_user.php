<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container3">
  <div class="table_user">
    <h3>Tabel User</h3>
    <a href="<?= base_url('user/create')?>" class="Tambah">Tambah Data</a>
    <table>
      <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>NPM</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
              <a class="btn_detail" href="<?= base_url('user/'. $user['id'])?>">Detail</a>
              <a class="btn_edit" href="">Edit</a>
              <a class="btn_hapus" href="">Hapus</a>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection('content') ?>