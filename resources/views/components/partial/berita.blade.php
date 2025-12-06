<!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Informasi</h4>
                    </div>
                    <h1 class="display-3 mb-4">Berita Terkini</h1>
                    <p class="mb-0">Kami menyajikan berita dan informasi yang aktual dan terpercaya!</p>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach($berita as $data)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="{{ asset('storage/' . $data->gambar) }}" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> {{ Carbon\Carbon::parse($data->tgl_posting)->diffForHumans() }}</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4">{{ $data->judul }}</a>
                                <p class="my-4">{!! Str::limit($data->isi_berita, 200, ' ...') !!}</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->