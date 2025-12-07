
            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">

                <div class="header-carousel-item">
                    <img src="{{ asset('storage/slide/slide_1.png') }}" class="img-fluid w-100" alt="Image">

                     <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Pemerintah Kota Bitung</h5>
                            <h1 class="display-5 text-capitalize text-white mb-4">Kelurahan Girian Bawah</h1>
                            <p class="mb-5 fs-5 animated slideInDown">Selamat Datang di Website Resmi Pemerintah Kelurahan Girian Bawah Kecamatan Girian Kota Bitung, 
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ asset('/pesan') }}">Hubungi Kami</a>
                        </div>
                    </div>
                   
                </div>

                @foreach($slides as $slide)
                <div class="header-carousel-item">
                    <img src="{{ asset('storage/' . $slide->gambar)  }}" class="img-fluid w-100" alt="Image">
                   
                </div>
                @endforeach
            </div>
            <!-- Carousel End -->