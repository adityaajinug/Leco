<div class="col">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-exclamation-triangle"></i></span>
        <span class="alert-text"><strong>Perhatian!</strong> Pilih Sesuai Kualifikasi dan Minat kamu !!!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

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