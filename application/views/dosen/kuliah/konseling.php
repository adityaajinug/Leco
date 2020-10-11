<div class="container">
    <div class="row pt-3 col d-flex justify-content-center">
        <div class="col ">
            <?php foreach ($bimbingan as $bim) : ?>
                <center>

                    <div class="card c">
                        <div class="card-body">
                            <div class="row col">
                                <div class="col-lg-4">
                                    <a href="#">
                                        <img src="<?= base_url('assets/') ?>img/profile/profile-avatar-png-4.png" class="rounded-circle i" width="100px">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <p><?= $bim['nama_dosen'] ?></p>
                                    <p>Home : <?= $bim['home'] ?></p>
                                    <i class="fas fa-signal text-green"></i><span>Online</span>
                                    <a class="btn btn-icon btn-primary" href="<?= base_url('kuliah_dosen/konseling_chat/' . $bim['id_pesan']); ?>">
                                        <span class="btn-inner-icon"><i class="fas fa-comments"></i></span>
                                        <span class="btn-inner-text">Chat</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </center>
            <?php endforeach ?>
        </div>
    </div>

</div>