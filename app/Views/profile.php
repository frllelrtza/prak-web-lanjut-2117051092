<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>   
<div class="container1">
    <div class="profile">
<img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="Profile" height = "240" width = "220"  >
    <table>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><?=$user['nama']?></td>
</tr>

<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?=$user['id_kelas']?></td>
</tr>

<tr>
    <td>NPM</td>
    <td>:</td>
    <td><?=$user['npm']?></td>
</tr>
</table>

</div>
</div>
<?= $this->endSection() ?>