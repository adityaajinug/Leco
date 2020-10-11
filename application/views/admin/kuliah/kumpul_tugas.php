<style>
    .kotak {
        /* margin: 20px auto; */
        /* background: #1ABC9C; */
        width: 100%;
        /* padding: 20px 50px 50px 50px; */
        border-radius: 3px;
    }
</style>

<div class="col">
    <!-- <div class="alert alert-danger" role="alert">
        <strong>Perhatian !</strong> Batas Pengumpulan Tugas Hari Selasa, 28 Juli 2020 Jam 17.00 WIB
    </div> -->

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Informasi Tugas</h2>
            <br>
            <div class="kotak">

                <textarea class="ckeditor" id="ckedtor"></textarea>
                <br />
                <button class="btn btn-success">Tambah Tugas</button>
            </div>

            <div class="table-responsive">
                <h1 class="text-center">Tugas Mahasiswa</h1>
                <table class="table table-bordered" style="color: black;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Tanggal Pengumpulan</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>A22.2019.02734</td>
                            <td>Nico Fernades</td>
                            <td>Senin, 26 Juli 2020</td>
                            <td>d.pdf</td>
                            <td>
                                <a class="badge badge-pill badge-warning">Download</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>A22.2019.02734</td>
                            <td>Nico Fernades</td>
                            <td>Senin, 26 Juli 2020</td>
                            <td>d.pdf</td>
                            <td>
                                <a class="badge badge-pill badge-warning">Download</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>