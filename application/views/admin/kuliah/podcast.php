<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_podcast">
                Tambah Podcast
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="nav-wrapper col-8">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Podcast Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Podcast Umum</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
    <!-- <center> -->

    <!-- 
    </center> -->
    <di<div class="row">
        <div class="col text-center">
            <center>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="row col-9 d-flex justify-content-center">
                            <?php foreach ($pod as $cast) : ?>
                                <?php if ($cast['jenis'] == "MATERI") { ?>
                                    <div style="width: 18rem;" class="col-lg-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->

                                            <a class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="nav-link-icon d-block"><i class="fas fa-podcast ni-3x text-primary"></i></span>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-nowrap">Dosen : <?= $cast['nama_pembuat']; ?></span>
                                                    <br>
                                                    <span class="text-nowrap">Tema : <?= $cast['tema']; ?> </span>
                                                    <hr>
                                                    <span class="text-nowrap">
                                                        <audio src="<?= base_url('assets/podcast/' . $cast['file']) ?>" controls></audio>
                                                    </span>
                                                    <br>
                                                </p>
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>

                                    </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="alert alert-warning col-9" role="alert">
                            <strong>Peringatan !</strong> Podcast ini dilakukan oleh mahasiswa maupun dosen.
                        </div>
                        <div class="row col-9 d-flex justify-content-center">

                            <?php foreach ($pod as $cast) : ?>
                                <?php if ($cast['jenis'] == "UMUM") { ?>
                                    <div style="width: 18rem;" class="col-lg-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->

                                            <a class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <span class="nav-link-icon d-block"><i class="fas fa-podcast ni-3x text-primary"></i></span>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-nowrap">Dosen : <?= $cast['nama_pembuat']; ?></span>
                                                    <br>
                                                    <span class="text-nowrap">Tema : <?= $cast['tema']; ?> </span>
                                                    <hr>
                                                    <span class="text-nowrap">
                                                        <audio src="<?= base_url('assets/podcast/' . $cast['file']) ?>" controls></audio>
                                                    </span>
                                                    <br>
                                                </p>
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>
                                    </div>
                        </div>
            </center>
        </div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_podcast" tabindex="-1" role="dialog" aria-labelledby="tambah_podcast_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah_podcast_label">Tambah podcast</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('kuliah_admin/tambah_pod') ?>
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Dosen</label>
                    <input class="form-control" type="text" id="nama" name="nama_pembuat" value="<?= $user['nama']; ?>" readonly required>
                </div>
                <div class="form-group">
                    <label for="tema" class="form-control-label">Tema</label>
                    <input class="form-control" type="text" name="tema" id="tema" required>
                </div>
                <div class="form-group">
                    <label for="jenis" class="form-control-label">Jenis Podcast</label>
                    <select class="form-control" id="jenis" name="jenis" required>
                        <option>Pilih Jenis</option>
                        <option value="MATERI">Materi</option>
                        <option value="UMUM">Umum</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_jurusan" class="form-control-label">Jurusan</label>
                    <select class="form-control" id="id_jurusan" name="id_jurusan" required>
                        <option value="0">---Pilih Jurusan---</option>
                        <option value="1">D3-Teknik Informatika</option>
                        <option value="2">S1-Rekam Medik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file" class="form-control-label">Upload Audio</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="file" id="file">
                        <label class="custom-file-label" for="customFileLang"></label>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>