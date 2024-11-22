<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Pegawai </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <link rel="icon" href="{{ asset('assets/images/logo-pegawai.jpg') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left d-flex justify-content-center align-items-center w-100">
                            <li class="text-center">
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Data Pegawai {{ $pegawai->nama_lengkap }}</h5>
                                            <p class="m-b-0">Anda dapat melihat dan memperbarui data pegawai langsung
                                                melalui formulir di bawah ini.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Page-header start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <form id="pegawaiForm"
                                                action="{{ route('pegawai.update', $pegawai->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Informasi Pribadi</h5>
                                                        <span style="color: #9d2c38;">(*) Kolom yang wajib diisi</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nama Lengkap<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="nama_lengkap"
                                                                    value="{{ $pegawai->nama_lengkap }}"
                                                                    placeholder="Masukkan nama lengkap" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tempat Lahir<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="tempat_lahir"
                                                                    value="{{ $pegawai->tempat_lahir }}"
                                                                    placeholder="Masukkan tempat lahir" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tanggal
                                                                Lahir<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="tanggal_lahir"
                                                                    placeholder="Masukan tanggal lahir"
                                                                    value="{{ $pegawai->tanggal_lahir }}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Jenis Kelamin<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="jenis_kelamin">
                                                                    <option value="Laki-laki"
                                                                        {{ $pegawai->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                                                        Laki-laki</option>
                                                                    <option value="Perempuan"
                                                                        {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                                                        Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Alamat
                                                                Domisili<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="alamat_domisili"
                                                                    value="{{ $pegawai->alamat_domisili }}"
                                                                    placeholder="Masukkan alamat domisili" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Status
                                                                Perkawinan<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="status_perkawinan">
                                                                    <option value="Belum Menikah"
                                                                        {{ $pegawai->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>
                                                                        Belum Menikah</option>
                                                                    <option value="Menikah"
                                                                        {{ $pegawai->status_perkawinan == 'Menikah' ? 'selected' : '' }}>
                                                                        Menikah</option>
                                                                    <option value="Lainnya"
                                                                        {{ $pegawai->status_perkawinan == 'Lainnya' ? 'selected' : '' }}>
                                                                        Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Kontak</h5>
                                                        <span style="color: #9d2c38;">(*) Kolom yang wajib diisi</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nomor HP<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="nomor_hp"
                                                                    value="{{ $pegawai->kontak->nomor_hp }}"
                                                                    placeholder="Masukkan nomor HP" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email
                                                                Pribadi<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                    name="email_pribadi"
                                                                    value="{{ $pegawai->kontak->email_pribadi }}"
                                                                    placeholder="Masukkan email pribadi" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email Kantor</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control"
                                                                    name="email_kantor"
                                                                    value="{{ $pegawai->kontak->email_kantor }}"
                                                                    placeholder="Masukkan email kantor (opsional)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Kontak
                                                                Darurat<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="kontak_darurat"
                                                                    value="{{ $pegawai->kontak->kontak_darurat }}"
                                                                    placeholder="Masukkan nomor kontak darurat" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Pekerjaan</h5>
                                                        <span style="color: #9d2c38;">(*) Kolom yang wajib diisi</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">NIP<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="nip"
                                                                    value="{{ $pegawai->pekerjaan->nip }}"
                                                                    placeholder="Masukkan NIP" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Jabatan<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="jabatan"
                                                                    value="{{ $pegawai->pekerjaan->jabatan }}"
                                                                    placeholder="Masukkan jabatan" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Divisi<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="divisi"
                                                                    value="{{ $pegawai->pekerjaan->divisi }}"
                                                                    placeholder="Masukkan divisi" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tanggal Mulai
                                                                Kerja<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="tanggal_mulai_kerja"
                                                                    value="{{ $pegawai->pekerjaan->tanggal_mulai_kerja }}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Status
                                                                Pegawai<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="status_pegawai">
                                                                    <option value="Tetap"
                                                                        {{ $pegawai->pekerjaan->status_pegawai == 'Tetap' ? 'selected' : '' }}>
                                                                        Tetap</option>
                                                                    <option value="Kontrak"
                                                                        {{ $pegawai->pekerjaan->status_pegawai == 'Kontrak' ? 'selected' : '' }}>
                                                                        Kontrak</option>
                                                                    <option value="Magang"
                                                                        {{ $pegawai->pekerjaan->status_pegawai == 'Magang' ? 'selected' : '' }}>
                                                                        Magang</option>
                                                                    <option value="Freelancer"
                                                                        {{ $pegawai->pekerjaan->status_pegawai == 'Freelancer' ? 'selected' : '' }}>
                                                                        Freelancer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Level
                                                                Senioritas<span
                                                                    style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control" name="level_senioritas">
                                                                    <option value="Junior"
                                                                        {{ $pegawai->pekerjaan->level_senioritas == 'Junior' ? 'selected' : '' }}>
                                                                        Junior</option>
                                                                    <option value="Mid-level"
                                                                        {{ $pegawai->pekerjaan->level_senioritas == 'Mid-level' ? 'selected' : '' }}>
                                                                        Mid-level</option>
                                                                    <option value="Senior"
                                                                        {{ $pegawai->pekerjaan->level_senioritas == 'Senior' ? 'selected' : '' }}>
                                                                        Senior</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Pendidikan</h5>
                                                        <span style="color: #9d2c38;">(*) Kolom yang wajib diisi</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Pendidikan
                                                                Terakhir<span style="color: #9d2c38;">*</span></label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="pendidikan_terakhir"
                                                                    value="{{ $pegawai->pendidikan->pendidikan_terakhir }}"
                                                                    placeholder="Masukkan pendidikan terakhir" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Keahlian
                                                                Teknologi</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control select2-multiple"
                                                                    name="keahlian_teknologi[]" multiple="multiple">
                                                                    @foreach ($keahlianList as $keahlian)
                                                                        <option value="{{ $keahlian }}"
                                                                            {{ in_array($keahlian, $pegawai->pendidikan->keahlian_teknologi) ? 'selected' : '' }}>
                                                                            {{ $keahlian }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <small class="text-muted">Pilih keahlian yang relevan.
                                                                    Anda bisa memilih lebih dari satu.</small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Bahasa Asing</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="bahasa_asing"
                                                                    value="{{ $pegawai->pendidikan->bahasa_asing }}"
                                                                    placeholder="Masukkan bahasa asing (opsional)" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Administrasi</h5>
                                                        <span style="color: #9d2c38;">(*) Kolom yang wajib diisi</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">BPJS
                                                                Kesehatan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="bpjs_kesehatan"
                                                                    value="{{ $pegawai->administrasi->bpjs_kesehatan }}"
                                                                    placeholder="Masukkan nomor BPJS Kesehatan (opsional)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">BPJS
                                                                Ketenagakerjaan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="bpjs_ketenagakerjaan"
                                                                    value="{{ $pegawai->administrasi->bpjs_ketenagakerjaan }}"
                                                                    placeholder="Masukkan nomor BPJS Ketenagakerjaan (opsional)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nomor NPWP</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="nomor_npwp"
                                                                    value="{{ $pegawai->administrasi->npwp }}"
                                                                    placeholder="Masukkan nomor NPWP (opsional)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nomor
                                                                Rekening</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="nomor_rekening"
                                                                    value="{{ $pegawai->administrasi->rekening_bank }}"
                                                                    placeholder="Masukkan nomor rekening (opsional)" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Kontrak
                                                                Kerja</label>
                                                            <div class="col-sm-10">
                                                                @if ($pegawai->administrasi && $pegawai->administrasi->kontrak_kerja)
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <strong>Dokumen Kontrak Kerja</strong>
                                                                        </div>
                                                                        <div class="card-body text-center">
                                                                            @php
                                                                                $filePath = asset(
                                                                                    'uploads/kontrak_kerja/' .
                                                                                        $pegawai->administrasi
                                                                                            ->kontrak_kerja,
                                                                                );
                                                                            @endphp
                                                                            <p>File kontrak kerja tersedia. Klik tombol
                                                                                di bawah untuk melihat dokumen.</p>
                                                                            <a href="{{ $filePath }}"
                                                                                class="btn btn-primary"
                                                                                target="_blank">
                                                                                <i class="fas fa-file-alt"></i> Lihat
                                                                                Kontrak Kerja
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                <!-- Form untuk mengupload file kontrak kerja -->
                                                                <div class="mt-3">
                                                                    <label for="kontrakKerjaUpload"
                                                                        class="form-label">Upload Kontrak Kerja
                                                                        Terbaru</label>
                                                                    <input type="file" class="form-control"
                                                                        id="kontrakKerjaUpload" name="kontrak_kerja"
                                                                        accept=".pdf,.doc,.docx,.jpg,.png" />
                                                                    <small class="text-muted">File yang diterima: PDF,
                                                                        DOC, DOCX, JPG, PNG.</small>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="form-group text-center">
                                                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                                </div>                                                

                                            </form>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-validate/jquery.validate.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-validate/jquery.validate.js') }} "></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('assets/pages/widget/excanvas.js') }} "></script>
    <!-- sweet alert js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 6000
            });
        </script>
    @endif


    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Pilih atau cari keahlian teknologi",
                allowClear: true // Menambahkan tombol untuk menghapus pilihan
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // console.log("Formulir siap untuk divalidasi");
            // console.log($("#pegawaiForm").validate);
            $("#pegawaiForm").validate({
                rules: {
                    nama_lengkap: {
                        required: true,
                        minlength: 3
                    },
                    tempat_lahir: {
                        required: true,
                    },
                    tanggal_lahir: {
                        required: true,
                        date: true
                    },
                    jenis_kelamin: {
                        required: true
                    },
                    alamat_domisili: {
                        required: true,
                        minlength: 5
                    },
                    status_perkawinan: {
                        required: true
                    },
                    nomor_hp: {
                        required: true,
                        digits: true,
                        minlength: 10
                    },
                    email_pribadi: {
                        required: true,
                        email: true
                    },
                    email_kantor: {
                        email: true
                    },
                    nip: {
                        required: true,
                        minlength: 5
                    },
                    jabatan: {
                        required: true
                    },
                    divisi: {
                        required: true
                    },
                    tanggal_mulai_kerja: {
                        required: true,
                        date: true
                    },
                    status_pegawai: {
                        required: true
                    },
                    level_senioritas: {
                        required: true
                    },
                    pendidikan_terakhir: {
                        required: true
                    },
                },
                messages: {
                    nama_lengkap: {
                        required: "Nama lengkap wajib diisi",
                        minlength: "Nama lengkap minimal terdiri dari 3 karakter"
                    },
                    tempat_lahir: {
                        required: "Tempat lahir wajib diisi"
                    },
                    tanggal_lahir: {
                        required: "Tanggal lahir wajib diisi",
                        date: "Masukkan tanggal yang valid"
                    },
                    jenis_kelamin: {
                        required: "Pilih jenis kelamin"
                    },
                    alamat_domisili: {
                        required: "Alamat domisili wajib diisi",
                        minlength: "Alamat minimal 5 karakter"
                    },
                    status_perkawinan: {
                        required: "Pilih status perkawinan"
                    },
                    nomor_hp: {
                        required: "Nomor HP wajib diisi",
                        digits: "Nomor HP hanya boleh berisi angka",
                        minlength: "Nomor HP minimal 10 digit"
                    },
                    email_pribadi: {
                        required: "Email wajib diisi",
                        email: "Masukkan email yang valid"
                    },
                    email_kantor: {
                        email: "Masukkan email yang valid"
                    },
                    nip: {
                        required: "NIP wajib diisi",
                        minlength: "NIP minimal 5 karakter"
                    },
                    jabatan: {
                        required: "Jabatan wajib diisi"
                    },
                    divisi: {
                        required: "Divisi wajib diisi"
                    },
                    tanggal_mulai_kerja: {
                        required: "Tanggal mulai kerja wajib diisi",
                        date: "Masukkan tanggal yang valid"
                    },
                    status_pegawai: {
                        required: "Pilih status pegawai"
                    },
                    level_senioritas: {
                        required: "Pilih level senioritas"
                    },
                    pendidikan_terakhir: {
                        required: "Pendidikan terakhir wajib diisi"
                    },
                },
                errorPlacement: function(error, element) {
                    error.addClass("text-danger small");
                    error.insertAfter(element);
                },
                highlight: function(element) {
                    $(element).addClass("is-invalid");
                },
                unhighlight: function(element) {
                    $(element).removeClass("is-invalid");
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Inisialisasi datepicker pada elemen input
            $('input[name="tanggal_lahir"]').datepicker({
                dateFormat: 'yy-mm-dd', // Format tanggal sesuai kebutuhan
                changeMonth: true, // Dropdown untuk memilih bulan
                changeYear: true, // Dropdown untuk memilih tahun
                yearRange: "1900:2100", // Rentang tahun
                showAnim: "slide" // Efek animasi saat muncul
            });
            $('input[name="tanggal_mulai_kerja"]').datepicker({
                dateFormat: 'yy-mm-dd', // Format tanggal sesuai kebutuhan
                changeMonth: true, // Dropdown untuk memilih bulan
                changeYear: true, // Dropdown untuk memilih tahun
                yearRange: "1900:2100", // Rentang tahun
                showAnim: "slide" // Efek animasi saat muncul
            });
        });
    </script>

    <!-- waves js -->
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('assets/js/chart.js/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('assets/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-layout.min.js') }} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }} "></script>
</body>

</html>
