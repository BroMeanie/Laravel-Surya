<!--
=========================================================
Volt Pro - Premium Bootstrap 5 Dashboard
Template structure adapted for CV Management
=========================================================
-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data CV - Dashboard</title>

    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar mobile -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo">
        </a>
        <button class="navbar-toggler d-lg-none collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item mb-3">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="25" width="25" alt="Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">CV Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="{{ route('cv.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 3H6a2 2 0 00-2 2v14a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14 3v5h6M8 13h8M8 17h8"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Data CV</span>
                    </a>
                </li>

                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                <li class="nav-item">
                    <a href="{{ route('cv.create') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                                stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Tambah CV</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main class="content">
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <div>
                        <span class="text-gray-600">Halaman /</span>
                        <span class="text-dark fw-bold">Data CV</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="text-gray-700 small">CV Management System</span>
                    </div>
                </div>
            </div>
        </nav>

        <div class="py-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <h1 class="h4 mb-1">Dashboard Data CV</h1>
                    <p class="mb-0 text-gray-600">Kelola seluruh data Curriculum Vitae.</p>
                </div>
                <a href="{{ route('cv.create') }}" class="btn btn-primary mt-3 mt-md-0">
                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m-7-7h14"></path>
                    </svg>
                    Tambah CV
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Summary cards -->
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col">
                                    <div class="h6 text-gray-400 mb-2">Total CV Terdaftar</div>
                                    <h2 class="h3 mb-0">{{ $cvs->count() }}</h2>
                                    <small class="text-success">Data CV dalam sistem</small>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape icon-lg bg-primary text-white rounded">
                                        <svg class="icon icon-md" fill="none" stroke="currentColor"
                                            stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 3H6a2 2 0 00-2 2v14a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14 3v5h6M8 13h8M8 17h8"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col">
                                    <div class="h6 text-gray-400 mb-2">CV Terbaru</div>
                                    <h2 class="h5 mb-0">
                                        {{ $cvs->isNotEmpty() ? $cvs->sortByDesc('created_at')->first()->nama : 'Belum ada data' }}
                                    </h2>
                                    <small class="text-gray-500">Nama pada data terakhir ditambahkan</small>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape icon-lg bg-secondary text-white rounded">
                                        <svg class="icon icon-md" fill="none" stroke="currentColor"
                                            stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col">
                                    <div class="h6 text-gray-400 mb-2">Aksi Cepat</div>
                                    <h2 class="h5 mb-0">Buat CV Baru</h2>
                                    <small><a href="{{ route('cv.create') }}">Klik untuk menambahkan data</a></small>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape icon-lg bg-tertiary text-white rounded">
                                        <svg class="icon icon-md" fill="none" stroke="currentColor"
                                            stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CV table -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2 class="h5 mb-0">Daftar Curriculum Vitae</h2>
                            <span class="badge bg-primary">{{ $cvs->count() }} Data</span>
                        </div>
                        <div class="card-body">
                            @if($cvs->isEmpty())
                                <div class="text-center py-5">
                                    <h3 class="h5">Belum ada data CV</h3>
                                    <p class="text-gray-500">Silakan tambahkan data CV pertama.</p>
                                    <a href="{{ route('cv.create') }}" class="btn btn-primary">Tambah CV</a>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0 rounded">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-0">No.</th>
                                                <th class="border-0">Nama</th>
                                                <th class="border-0">Email</th>
                                                <th class="border-0">Telepon</th>
                                                <th class="border-0">Pendidikan</th>
                                                <th class="border-0 text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cvs as $cv)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="fw-bold">{{ $cv->nama }}</td>
                                                    <td>{{ $cv->email }}</td>
                                                    <td>{{ $cv->telepon }}</td>
                                                    <td>{{ $cv->pendidikan }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('cv.show', $cv->id) }}"
                                                            class="btn btn-info btn-sm text-white">Detail</a>
                                                        <a href="{{ route('cv.edit', $cv->id) }}"
                                                            class="btn btn-warning btn-sm text-white">Edit</a>
                                                        <form action="{{ route('cv.destroy', $cv->id) }}"
                                                            method="POST" class="d-inline"
                                                            onsubmit="return confirm('Yakin ingin menghapus data CV ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-white rounded shadow p-4 mb-4 mt-4">
            <div class="row">
                <div class="col-12 text-center text-lg-start">
                    <p class="mb-0">© {{ date('Y') }} CV Management System</p>
                </div>
            </div>
        </footer>
    </main>

    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>
</html>
