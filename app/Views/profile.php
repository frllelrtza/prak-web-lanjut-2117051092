<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>   
<div class="container1">
    <div class="profile">
<img src="<?= base_url('assets/img/faphoto.jpg'); ?>" alt="Profile" height = "240" width = "220"  >
    <table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?= $nama ?></td>
</tr>

<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?= $kelas ?></td>
</tr>

<tr>
    <td>NPM</td>
    <td>:</td>
    <td><?= $npm ?></td>
</tr>
</table>

</div>
</div>
<?= $this->endSection() ?>