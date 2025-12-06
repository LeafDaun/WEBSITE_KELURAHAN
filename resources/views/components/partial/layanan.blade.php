 <!-- Layanan Publik Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Layanan Kami</h4>
                    </div>
                    <h1 class="display-3 mb-4">Layanan Publik</h1>
                    <p class="mb-0">Kami menyajikan layanan untuk publik sebagai berikut </p>
                </div>

                <div class="row g-4 justify-content-center">

                    @foreach($layanan as $data)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="{{ asset('storage/' .$data->gambar) }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">{{ $data->judul }}</h5>
                                    <p class="mb-4">{{ $data->deskripsi }}</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Layanan Publik End -->