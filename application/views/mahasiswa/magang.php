<div class="col">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="fas fa-exclamation-triangle"></i></span>
        <span class="alert-text"><strong>Perhatian!</strong> Pemilihan Magang akan dibuka pada saat mahasiswa mengambil sks KKN / KKI !</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

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