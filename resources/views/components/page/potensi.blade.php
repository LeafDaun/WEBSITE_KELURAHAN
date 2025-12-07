<x-layouts.app>

    <div class="container service mt-5">

        <!-- Potensi Start -->
       <div class="container py-5 ">

                <div class="section-title mb-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Potensi Unggulan</h4>
                    </div>
                    <h1 class="display-8 mb-4">Kelurahan Girian</h1>
                    <p class="mb-0">Berikut ini adalah Potensi Unggulan yang ada </p>
                </div>

                
                <div class="row g-4 justify-content-center">
                    @foreach($potensi as $data)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="{{ asset('storage/' .$data->gambar) }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">{{ $data->judul }}</h5>
                                    <p class="mb-4">{{ $data->deskripsi }}</p>
                                    <a href="{{ route('potensi.show', $data->id) }}" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                

       </div>
       <!-- Potensi End -->

     
       
    </div>
    
</x-layouts.app>