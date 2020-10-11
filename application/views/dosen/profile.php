<!-- Page content -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="<?= base_url('assets/') ?>img/profile/profile-avatar-png-4.png" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
                <div class="card-body pt-0">
                    <!-- <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">SKS</span>
                                </div>
                                <div>
                                    <span class="heading">2</span>
                                    <span class="description">Semester</span>
                                </div>

                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div class="text-center">
                                    <h5 class="h3">
                                        <?= $user['nama']; ?>
                                    </h5>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>Umur 30th
                                    </div>
                                    <div class="h5 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>Fakulas Ilmu Komputer
                                    </div>
                                    <div>
                                        <i class="ni education_hat mr-2"></i>D3 - Teknik Informatika
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit profile </h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Informasi Dosen</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">NIP</label>
                                        <input type="text" id="input-username" class="form-control" value="11233443 890" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Emai</label>
                                        <input type="email" id="input-email" class="form-control" value="a221902734@mahasiswa.dinus.ac.id" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama Lengkap</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="Masukan Nama" value="Nico Fernades">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Informasi Alamat</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Alamat</label>
                                        <input id="input-address" class="form-control" value="Jl Mana Aja no 23" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">Kota</label>
                                        <input type="text" id="input-city" class="form-control" value="Semarang">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Kecamatan</label>
                                        <input type="text" id="input-country" class="form-control" value="Banyumanik">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Kelurahan</label>
                                        <input type="text" id="input-country" class="form-control" value="Kawi">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Kode Pos</label>
                                        <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class="my-4" /> -->
                        <!-- Description -->
                        <!-- <h6 class="heading-small text-muted mb-4">Kemahasiswaan</h6>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Kelas</label>
                                    <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code" value="Pagi" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-country">Dosen Wali</label>
                                    <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code" value="IBNU UTOMO W.M., M.Kom" readonly>
                                </div> -->
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>