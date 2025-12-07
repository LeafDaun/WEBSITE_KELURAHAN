
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="{{ $profil->lokasi_kantor }}" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Lokasi Kantor</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>{{ $profil->telp }}</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>{{ $profil->email }}</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="{{ $profil->facebook }}" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar  Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    {{-- <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Girian Bawah</h1> --}}
                    <img src="{{ asset('storage/' .$profil->logo) }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ asset('/') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ asset('informasi/profil') }}" class="nav-item nav-link">Profil</a>
                        <a href="{{ asset('informasi/potensi') }}" class="nav-item nav-link">Potensi Unggulan</a>
                        <a href="{{ asset('informasi/galeri') }}" class="nav-item nav-link">Galeri</a>
                        {{-- <a href="#" class="nav-item nav-link">Kontak</a> --}}
                    </div>
                    <a href="{{ asset('informasi/kontak') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Hubungi Kami</a>
                </div>
            </nav>


        </div>
        <!-- Navbar  End -->