<div class="col-6 pt-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#diskusi">
        Buat Diskusi
    </button>
</div>
<div class="col pt-4 mb-4">
    <?php foreach ($forum as $discus) : ?>
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#per_2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="per_2">
                <span class="m-0 font-weight-bold text-primary"><?= $discus['nama']; ?><i class="ni ni-bold-down"></i></span>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="per_2">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            Diskusi ini dibuat pada : <?= date('d F Y - G:i:s', $discus['date_created']); ?> WIB</td>

                            <br>
                            Oleh : <?= $discus['pembuat']; ?>
                            <br>
                            Keterangan : <?= $discus['keterangan']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="pt-3">
                                <a class="btn btn-icon btn-warning mb-3" href="<?= base_url('kuliah/ikut_diskusi/') . $discus['id_pesan'] ?>">
                                    <span class="btn-inner--icon"><i class="fas fa-sign-in-alt"></i></span>
                                    <span class="btn-inner--text">Ikut Diskusi</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="diskusi" tabindex="-1" role="dialog" aria-labelledby="diskusiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diskusiLabel">Buat Ruang Diskusi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('kuliah/buat_forum') ?>
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Diskusi</label>
                    <input class="form-control" type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="jurusan" class="form-control-label">Jurusan</label>
                    <select class="form-control" id="jurusan" name="id_jurusan" required>
                        <option value="1">D3-Teknik Informatika</option>
                        <option value="2">S1-Rekam Medik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="form-control-label">Keterangan</label>
                    <select class="form-control" id="keterangan" name="keterangan" required>
                        <option value="Diluar Mata Kuliah">Diluar Mata Kuliah</option>
                        <option value="Sesuai Mata Kuliah">Sesuai Mata Kuliah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal" class="form-control-label">Tanggal Mulai</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020" id="tanggal" name="date_created" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai" class="form-control-label">Tanggal Selesai</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020" id="tanggal_selesai" name="date_end" required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Buat </button>
            </div>
            </form>
        </div>
    </div>
</div>