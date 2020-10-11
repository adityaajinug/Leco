<div class="col">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#magang">
        Tambah Magang
    </button>

</div>

<div class="pt-3 col-12">
    <div class="card card-stats">
        <div class="card-body">
            <div class="table-responsive">
                <h1 class="text-center">DAFTAR PENGAJUAN PERUSAHAAN MAGANG</h1>
                <table class="table table-bordered" style="color: black;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">KODE</th>
                            <th scope="col">NAMA PERUSAHAAN</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">JADWAL</th>
                            <th scope="col">DOSEN PEMBIMBING</th>
                            <th scope="col">KETERANGAN</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($magang as $gang) : ?>
                            <tr>
                                <th><?= $i; ?></th>
                                <td><?= $gang['kode']; ?></td>
                                <td><?= $gang['nama']; ?></td>
                                <td><?= $gang['alamat']; ?></td>
                                <td><?= $gang['jadwal']; ?></td>
                                <td><?= $gang['dosbim']; ?></td>
                                <td><?= $gang['keterangan']; ?></td>
                                <td>
                                    <a class="badge badge-pill badge-success">Memenuhi Kualifikasi</a>
                                </td>
                                <td>
                                    <a class="badge badge-pill badge-success" href="<?= $gang['url']; ?>">Ajukan</a>
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
<div class="modal fade" id="magang" tabindex="-1" role="dialog" aria-labelledby="magangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="magangLabel">Tambah Magang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/tambah_magang') ?>">
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
                        <label for="dosbim" class="form-control-label">Dosen Pembimbing</label>
                        <input class="form-control" type="text" id="dosbim" name="dosbim" required>
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