<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <div class="profile">
                <div class="content">
                    <div class="foto mb-3" >
                        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="Profile" class="img-fluid" width="220" height="240">
                    </div>
                    <div class="table-content">       
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama</th>
                                <td><?= $user['nama'] ?></td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td><?= $user['id_kelas'] ?></td>
                            </tr>
                            <tr>
                                <th>NPM</th>
                                <td><?= $user['npm'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            
        </div>
    </div>  
<?= $this->endSection() ?>