<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">

    <title>Create User</title>
</head>
<body>
    <div class="container2">
    <form action="<?=base_url('/user/store')?>" method = 'post'>
        <label for="nama">Nama</label>
        <input type="text" name="nama"<?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">><br> 
        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
          <div class="invalid-feedback">
            <?= session('validation')->getError('nama'); ?>
          </div>
        <?php endif; ?>

        <label for="npm">NPM</label>
        <input type="text" name="npm" <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>"><br> 
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
                        <option value="<?=$item['id']?>">
                            <?=$item['nama_kelas']?>
                        </option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>



        <input type="Submit">
    </form>
    </div>
</body>
</html>