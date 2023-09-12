<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<center>
<body>
<img src="<?= base_url('faphoto.jpg'); ?>" alt="Profile" height = "240" width = "220" margin= "auto">
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

</body>
</center>
</html>