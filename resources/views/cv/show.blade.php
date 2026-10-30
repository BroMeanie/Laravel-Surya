@php($pageTitle = 'Detail CV')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }} - CV Management</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand" href="{{ route('cv.index') }}">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <ul class="nav flex-column pt-3">
                <li class="nav-item mb-3">
                    <a href="{{ route('cv.index') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="25" width="25" alt="Logo">
                        </span>
                        <span class="sidebar-text ms-1">CV Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('cv.index') }}" class="nav-link">
                        <span class="sidebar-text">Data CV</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cv.create') }}" class="nav-link">
                        <span class="sidebar-text">Tambah CV</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100">
                    <span class="text-dark fw-bold">CV Management System</span>
                    <a href="{{ route('cv.index') }}" class="btn btn-outline-gray-600 btn-sm">Kembali ke Data CV</a>
                </div>
            </div>
        </nav>
        <div class="py-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <h1 class="h4 mb-1">Detail Curriculum Vitae</h1>
                    <p class="text-gray-600 mb-0">Informasi lengkap CV {{ $cv->nama }}.</p>
                </div>
                <a href="{{ route('cv.edit', $cv->id) }}" class="btn btn-warning text-white mt-2">Edit CV</a>
            </div>

            <div class="card border-0 shadow">
                <div class="card-header">
                    <h2 class="h5 mb-0">Informasi Pribadi</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-gray-500">Nama Lengkap</h6>
                            <p class="fw-bold">{{ $cv->nama }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="text-gray-500">Email</h6>
                            <p>{{ $cv->email }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="text-gray-500">Nomor Telepon</h6>
                            <p>{{ $cv->telepon }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="text-gray-500">Pendidikan Terakhir</h6>
                            <p>{{ $cv->pendidikan }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6 class="text-gray-500">Alamat</h6>
                            <p>{{ $cv->alamat }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6 class="text-gray-500">Pengalaman</h6>
                            <p class="text-wrap">{{ $cv->pengalaman ?: 'Belum diisi.' }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6 class="text-gray-500">Keahlian</h6>
                            <p class="text-wrap">{{ $cv->keahlian ?: 'Belum diisi.' }}</p>
                        </div>
                        <div class="col-12 mb-3">
                            <h6 class="text-gray-500">Tentang Diri</h6>
                            <p class="text-wrap">{{ $cv->deskripsi ?: 'Belum diisi.' }}</p>
                        </div>
                    </div>
                    <a href="{{ route('cv.index') }}" class="btn btn-outline-gray-600">Kembali</a>
                </div>
            </div>

        </div>
        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">
            <p class="mb-0">© {{ date('Y') }} CV Management System</p>
        </footer>
    </main>
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>
</html>
