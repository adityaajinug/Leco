<div class="col">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#job">
        Tambah Job
    </button>

</div>

<div class="pt-3 col-12">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <h1 class="text-center">DAFTAR PENGAJUAN PENDAFTARAN KERJA</h1>
                <table class="table table-bordered" style="color: black;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">KODE</th>
                            <th scope="col">NAMA PERUSAHAAN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">JADWAL</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($job as $jobs) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $jobs['kode']; ?></td>
                                <td><?= $jobs['nama']; ?></td>
                                <td><?= $jobs['alamat']; ?></td>
                                <td><?= $jobs['jadwal']; ?></td>

                                <td><?= $jobs['keterangan']; ?></td>
                                <td>
                                    <a class="badge badge-pill badge-success">Memenuhi Kualifikasi</a>
                                </td>
                                <td>
                                    <a class="badge badge-pill badge-success" href="<?= $jobs['url']; ?>">Daftar</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="job" tabindex="-1" role="dialog" aria-labelledby="jobLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobLabel">Tambah Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('kuliah_admin/tambah_job') ?>">
                    <div class="form-group">
                        <label for="kode" class="form-control-label">Kode</label>
                        <input class="form-control" type="text" id="kode" name="kode" required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama Perusahaan</label>
                        <input class="form-control" type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-control-label">Alamat Perusahaan</label>
                        <input class="form-control" type="text" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="jadwal" class="form-control-label">Jadwal</label>
                        <input class="form-control" type="text" id="jadwal" name="jadwal" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="form-control-label">Keterangan</label>
                        <input class="form-control" type="text" id="keterangan" name="keterangan" requireds>
                    </div>
                    <div class="form-group">
                        <label for="url" class="form-control-label">url</label>
                        <input class="form-control" type="text" id="url" name="url" requireds>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah </button>
                </form>
            </div>
        </div>
    </div>
</div>