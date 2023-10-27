<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>    
<div class="container">
    <div class="edit_user">
      <div class="col-md-6 offset-md-3">
        <div class="create_user">
              <div class="border_user">
                <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama_kelas'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="text" name="kapasitas" class="form-control <?= session('validation') && session('validation')->hasError('kapasitas') ? 'is-invalid' : '' ?>" id="kapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= $kelas['kapasitas'] ?>">
                        <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('kapasitas'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
<?= $this->endSection() ?>