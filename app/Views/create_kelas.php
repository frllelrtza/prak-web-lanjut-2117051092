<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>    
<div class="container">
            <div class="create_user">
              <div class="border_user">
                <form action="<?= base_url('/kelas/store') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
                        <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama_kelas'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="text" name="kapasitas" class="form-control <?= session('validation') && session('validation')->hasError('kapasitas') ? 'is-invalid' : '' ?>" id="kapasitas" placeholder="Kapasitas" name="kapasitas" value="<?= old('kapasitas') ?>">
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
<?= $this->endSection() ?>