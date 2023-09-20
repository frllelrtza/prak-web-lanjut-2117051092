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
        <input type="text" name="nama"><br> 
        
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas"><br> 

        <label for="npm">NPM</label>
        <input type="text" name="npm"><br> 

        <input type="Submit">
    </form>
    </div>
</body>
</html>