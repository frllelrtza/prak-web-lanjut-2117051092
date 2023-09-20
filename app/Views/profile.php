<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Profile</title>
    <style>
        .container{
            margin-top: 200px;
            
        }
    </style>
</head>
<center>
<body>
    <div class="container1">
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
</body>
</center>
</html>