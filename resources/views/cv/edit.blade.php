@php($pageTitle = 'Edit CV')
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

            <div class="mb-4">
                <h1 class="h4">Edit Data CV</h1>
                <p class="text-gray-600 mb-0">Perbarui informasi CV yang dipilih.</p>
            </div>
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ route('cv.update', $cv->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                <div class="col-12">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $cv->nama) }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama lengkap" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $cv->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@email.com" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $cv->telepon) }}" class="form-control @error('telepon') is-invalid @enderror" placeholder="Masukkan nomor telepon" required>
                @error('telepon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat lengkap" required>{{ old('alamat', $cv->alamat) }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                <input type="text" name="pendidikan" id="pendidikan" value="{{ old('pendidikan', $cv->pendidikan) }}" class="form-control @error('pendidikan') is-invalid @enderror" placeholder="Contoh: D3 Teknik Informatika" required>
                @error('pendidikan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="pengalaman" class="form-label">Pengalaman</label>
                <textarea name="pengalaman" id="pengalaman" rows="3" class="form-control @error('pengalaman') is-invalid @enderror" placeholder="Tuliskan pengalaman kerja atau organisasi" >{{ old('pengalaman', $cv->pengalaman) }}</textarea>
                @error('pengalaman')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="keahlian" class="form-label">Keahlian</label>
                <textarea name="keahlian" id="keahlian" rows="3" class="form-control @error('keahlian') is-invalid @enderror" placeholder="Tuliskan keahlian yang dimiliki" >{{ old('keahlian', $cv->keahlian) }}</textarea>
                @error('keahlian')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                    <label for="deskripsi" class="form-label">Tentang Diri</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Tuliskan ringkasan singkat tentang diri Anda" >{{ old('deskripsi', $cv->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('cv.index') }}" class="btn btn-outline-gray-600">Batal</a>
                            </div>
                        </div>
                    </form>
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
