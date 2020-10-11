<div class="container">
    <div class="col-6 pt-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pinjam">
            Ajukan Peminjaman
        </button>
    </div>
    <?= $this->session->flashdata('message'); ?>

    <div class="pt-3 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <h1 class="text-center">Buku Riwayat Peminjaman</h1>
                    <table class="table table-bordered" style="color: black;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Penggunaan</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Pengembalian</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($alat as $a) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>RM07822</td>
                                    <td><?= $a['nama_barang']; ?></td>
                                    <td>Praktikum 11 Rekam Medis</td>
                                    <td><?= $a['tgl_pinjam']; ?></td>
                                    <td><?= $a['tgl_kembali']; ?></td>
                                    <td>
                                        <?php if ($a['status'] == 0) : ?>
                                            <a class="badge badge-pill badge-danger">Belum Diambil</a>
                                        <?php elseif ($a['status'] == 1) : ?>
                                            <a class="badge badge-pill badge-warning">Pinjam</a>
                                        <?php else : ?>
                                            <a class="badge badge-pill badge-success">Selesai</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="pinjam" tabindex="-1" role="dialog" aria-labelledby="pinjamLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pinjamLabel">Ajukan Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('kuliah/sewa') ?>">
                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama Peminjam</label>
                        <input class="form-control" type="text" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nim" class="form-control-label">NIM</label>
                        <input class="form-control" type="text" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="barang" class="form-control-label">Nama Barang</label>
                        <select class="form-control" name="nama_barang" required>
                            <option value="Belum Pilih">Pilih Barang</option>
                            <option value="RM-08856 | Tensi Meter ( Tersedia )">RM-08856 | Tensi Meter ( Tersedia )</option>
                            <option value="TI-08756 | Laptop ( Habis )">TI-08756 | Laptop ( Habis )</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="form-control-label">Tanggal Pinjam</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020" name="tgl_pinjam" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai" class="form-control-label">Tanggal kembali</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020" name="tgl_kembali" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ajukan </button>
                </form>
            </div>
        </div>
    </div>
</div>