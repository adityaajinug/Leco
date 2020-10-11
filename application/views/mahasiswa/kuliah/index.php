<div class="container">
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <!-- <center> -->
            <div class="nav-wrapper col-8">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Mata Kuliah SKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Lintas Mata Kuliah ( KRS )</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- </center> -->

    <div class="row">
        <div class="col text-center">
            <center>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="row col-9 d-flex justify-content-center">

                            <div style="width: 18rem;" class="col-lg-6">
                                <div class="card card-stats">
                                    <!-- Card body -->

                                    <a class="card-body" href="<?= base_url('kuliah/materi') ?>">
                                        <div class="row">
                                            <div class="col">
                                                <span class="nav-link-icon d-block"><i class="fas fa-book-open ni-3x text-primary"></i></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">Mata Kuliah : Bahasa Indonesia</span>
                                            <br>
                                            <span class="text-nowrap">Absensi : <span class="badge badge-pill badge-danger">20%</span> </span>
                                            <hr>
                                            <span class="text-nowrap">
                                                Jadwal :
                                                <br>
                                                1. SENIN | 12.30-14.10
                                                <br>
                                                2. JUMAT | 14.10-16.20
                                            </span>
                                            <br>
                                        </p>
                                    </a>
                                </div>
                                <div class="card card-stats">
                                    <!-- Card body -->

                                    <a class="card-body" href="<?= base_url('kuliah/materi') ?>">
                                        <div class="row">
                                            <div class="col">
                                                <span class="nav-link-icon d-block"><i class="fas fa-book-open ni-3x text-primary"></i></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">Mata Kuliah : Pemprograman Dasar</span>
                                            <br>
                                            <span class="text-nowrap">Absensi : <span class="badge badge-pill badge-warning">65%</span> </span>
                                            <hr>
                                            <span class="text-nowrap">
                                                Jadwal :
                                                <br>
                                                1. SELASA | 12.30-14.10
                                                <br>
                                                2. KAMIS | 14.10-16.20
                                            </span>
                                            <br>
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <div style="width: 18rem;" class="col-lg-6">
                                <div class="card card-stats">
                                    <!-- Card body -->

                                    <a class="card-body" href="<?= base_url('kuliah/materi') ?>">
                                        <div class="row">
                                            <div class="col">
                                                <span class="nav-link-icon d-block"><i class="fas fa-book-open ni-3x text-primary"></i></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">Mata Kuliah : Pemrograman Website</span>
                                            <br>
                                            <span class="text-nowrap">Absensi : <span class="badge badge-pill badge-success">79%</span> </span>
                                            <hr>
                                            <span class="text-nowrap">
                                                Jadwal :
                                                <br>
                                                1. SENIN | 12.30-14.10
                                                <br>
                                                2. JUMAT | 14.10-16.20
                                            </span>
                                            <br>
                                        </p>
                                    </a>
                                </div>
                                <div class="card card-stats">
                                    <!-- Card body -->

                                    <a class="card-body" href="<?= base_url('kuliah/materi') ?>">
                                        <div class="row">
                                            <div class="col">
                                                <span class="nav-link-icon d-block"><i class="fas fa-book-open ni-3x text-primary"></i></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">Mata Kuliah : Analisis Sistem</span>
                                            <br>
                                            <span class="text-nowrap">Absensi : <span class="badge badge-pill badge-success">87%</span> </span>
                                            <hr>
                                            <span class="text-nowrap">
                                                Jadwal :
                                                <br>
                                                1. SELASA | 12.30-14.10
                                                <br>
                                                2. KAMIS | 14.10-16.20
                                            </span>
                                            <br>
                                        </p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="alert alert-warning col-9" role="alert">
                            <strong>Peringatan !</strong> Untuk mengambil matakuliah luar progdi, mahasiswa harus minimal menginjaki semester 3.
                        </div>
                        <div class="row col-9">

                            <div style="width: 18rem;" class="col-lg-6">
                                <div class="card card-stats">
                                    <!-- Card body -->

                                    <a class="card-body" href="<?= base_url('kuliah/materi') ?>">
                                        <div class="row">
                                            <div class="col">
                                                <span class="nav-link-icon d-block"><i class="fas fa-book-open ni-3x text-primary"></i></span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-nowrap">Mata Kuliah : Ekonomi Makro</span>
                                            <br>
                                            <span class="text-nowrap">Absensi : <span class="badge badge-pill badge-success">100%</span> </span>
                                            <hr>
                                            <span class="text-nowrap">
                                                Jadwal :
                                                <br>
                                                1. SENIN | 12.30-14.10
                                                <br>
                                                2. JUMAT | 14.10-16.20
                                            </span>
                                            <br>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </center>
        </div>
    </div>
</div>