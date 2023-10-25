<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>    

<div class="container2">
<div class="create_user">
  
<form action="<?=base_url('/user/' . $user['id'])?>" method = 'post' enctype='multipart/form-data'>
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>
    <label for="nama">Nama</label>
    <input type="text" name="nama"<?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= $user['nama'] ?>"><br> 
    <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
      <div class="invalid-feedback">
        <?= session('validation')->getError('nama'); ?>
      </div>
    <?php endif; ?>

    <label for="npm">NPM</label>
    <input type="text" name="npm" <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>"><br> 
    <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
      <div class="invalid-feedback">
        <?= session('validation')->getError('npm'); ?>
      </div>
    <?php endif; ?>

    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>
            <select name="kelas" id="kelas">
                <?php foreach($kelas as $item):?>
                    <option value="<?=$item['id']?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                        <?=$item['nama_kelas']?>
                    </option>
                <?php endforeach;?>
            </select>
        </td>
    </tr>

    <label for ="foto" class="foto">Foto</label>
    <img src="<?= $user['foto'] ?? '<default-foto>' ?>" style="width : 100px;">
    <input type="file" name="foto">

    <input type="Submit">
</form>
</div>
</div>
<?= $this->endSection() ?>