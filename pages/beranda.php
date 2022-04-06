<?php
    $alert=$_COOKIE['welcome'];
    
    $jurusan=Kelas($_SESSION['username'])['jurusan'];

    switch($_SESSION['JenisLog'])
    {
        case "admin":
            $lihat="
                <section class='container section animate__animated animate__fadeInLeft' id='home'>
                    <h2 class='section__title'>Selamat Datang</h2>
                    <h4 class='section__name text-capitalize'>".Admin($_SESSION['username'])['nama']."</h4>
                </section>

                <section class='container animate__animated animate__fadeInRight' id='home'>
                    <div class='row d-flex justify-content-end'>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-blue text-uppercase mb-1'>
                                            Nama sekolah</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>SMK PASUNDAN SUBANG</div>
                                        </div>
                                        <div class='col-auto'>
                                            <a href='http://smkpasundansubang.sch.id/' class='btn btn-blue'>
                                            <i class='bx bx-building-house bx-md bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-warning text-uppercase mb-1'>
                                            Absen Masuk</div>
                                            <div class='mb-0 font-weight-bold text-gray'>
                                                <p>Total : 90</p>
                                            </div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-warning'>
                                            <i class='bx bx-bar-chart-alt-2 bx-md bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                            Jumlah Siswa</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>
                                                <p>Siswa : 90</p>
                                            </div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-primary'>
                                            <i class='fas fa-users fa-2x bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            ";
        break;

        case 'siswa':
            $lihat="
                <section class='container section animate__animated animate__fadeInLeft' id='home'>
                    <h2 class='section__title'>Selamat Datang</h2>
                    <h4 class='section__name text-capitalize'>".Siswa($_SESSION['username'])['nama']."</h4>
                </section>

                <section class='container animate__animated animate__fadeInRight' id='home'>
                    <div class='row d-flex justify-content-end'>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-blue text-uppercase mb-1'>
                                            Nama sekolah</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>SMK PASUNDAN SUBANG</div>
                                        </div>
                                        <div class='col-auto'>
                                            <a href='http://smkpasundansubang.sch.id/' class='btn btn-blue'>
                                            <i class='bx bx-building-house bx-md bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-warning text-uppercase mb-1'>
                                            Kelas</div>
                                            <div class='mb-0 font-weight-bold text-gray'>
                                                <p>".Kelas($_SESSION['username'])['nama_kelas']."</p>
                                            </div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-warning'>
                                            <i class='bx bx-bar-chart-alt-2 bx-md bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- nama sekolah-->
                        <div class='col-xl-3 col-md-4'>
                            <div class='card shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                            Jurusan</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>
                                                <p>".Jurusan($jurusan)."</p>
                                            </div>
                                        </div>
                                        <div class='col-auto'>
                                            <a class='btn btn-primary'>
                                            <i class='fas fa-users fa-2x bx-tada-hover' style='color:#ffffff'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            ";
            break;
    }
    $active0="active-link";
    $template = "dashboard";
    $title = "Beranda";
    $konten = "

        $lihat
        
    ";

    
?>