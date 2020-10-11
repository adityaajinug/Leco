<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link href="<?= base_url('assets/home/gambar/') ?>Logo 2.png" rel="icon">
</head>

<body>
    <style>
        .border-md {
            border-width: 2px;
        }

        .btn-facebook {
            background: #405D9D;
            border: none;
        }

        .btn-facebook:hover,
        .btn-facebook:focus {
            background: #314879;
        }

        .btn-twitter {
            background: #42AEEC;
            border: none;
        }

        .btn-twitter:hover,
        .btn-twitter:focus {
            background: #1799e4;
        }




        body {
            min-height: 100vh;
        }

        .form-control:not(select) {
            padding: 1.5rem 0.5rem;
        }

        select.form-control {
            height: 52px;
            padding-left: 0.5rem;
        }

        .form-control::placeholder {
            color: #ccc;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .form-control:focus {
            box-shadow: none;
        }
    </style>
    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="<?= base_url('home') ?>" class="navbar-brand">
                    LECO
                </a>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Learning College</h1>
                <p class="font-italic text-muted mb-0">Selamat datang di website kuliah online LECO ( Learning College ). Silahkan daftarkan akun anda</p>

            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <h1 class="text-center mb-3">Halaman Pendaftaran</h1>
                <?= form_open_multipart('auth/add') ?>
                <div class="row">
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user-alt text-muted"></i>
                            </span>
                        </div>
                        <input id="nama" type="text" name="nama" placeholder="Nama " class="form-control bg-white border-left-0 border-md" required>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-university text-muted"></i>
                            </span>
                        </div>

                        <select class="form-control bg-white border-left-0 border-md" id="jurusan" name="id_jurusan" required>
                            <option value="0">---Pilih Jurusan---</option>
                            <option value="1">D3-Teknik Informatika</option>
                            <option value="2">S1-Rekam Medik</option>
                        </select>
                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-chalkboard text-muted"></i>
                            </span>
                        </div>
                        <select class="form-control bg-white border-left-0 border-md" id="jurusan" name="id_kelas" required>
                            <option value="0">---Pilih Kelas---</option>
                            <option value="1">A22.3102</option>
                            <option value="2">A12.3042</option>
                        </select>

                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-chalkboard text-muted"></i>
                            </span>
                        </div>
                        <select class="form-control bg-white border-left-0 border-md" id="role_id" name="role_id" required>
                            <option>---Sebagai---</option>
                            <option value="3">Dosen</option>
                            <option value="2">Siswa</option>
                        </select>

                    </div>
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>

                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>



                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Daftar</span>
                        </button>
                    </div>



                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>