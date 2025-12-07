<x-layouts.app>
     <div class="container service mt-5">

       <div class="container py-5 ">

                <div class="section-title mb-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Galeri</h4>
                    </div>
                    <h1 class="display-8 mb-4">Kelurahan Girian</h1>
                </div>

                 <!-- Galeri Start -->
                 
                <div class="container-fluid team py-5">
                    <div class="container py-5">
                        <div class="row g-4 justify-content-center">
                            @foreach($galeri as $data)

                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item rounded">
                                    <div class="team-img rounded-top h-100">
                                        <img src="{{ asset('storage/' .$data->gambar) }}" class="img-fluid rounded-top w-100" alt="">
                                    </div>
                                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                        <h5>{{ $data->judul }}</h5>
                                        <p class="mb-0">{{ \Carbon\Carbon::parse($data->tgl_posting)->format('d-M-Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Galeri End -->

       </div>
       
    </div>
</x-layouts.app>