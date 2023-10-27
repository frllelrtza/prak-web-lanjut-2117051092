<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>    
<div class="container">
            <div class="create_user">
              <div class="border_user">
                <form action="<?= base_url('/user/store') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
                        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" name="npm" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
                        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('npm'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" class="form-select" id="kelas">
                            <?php foreach ($kelas as $item) : ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['nama_kelas'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div> 
          </div>
</div>
<?= $this->endSection() ?>