<x-layouts.app>

    <div class="container service mt-5">

        
       <div class="container py-5 ">

                <div class="section-title mb-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Potensi Unggulan</h4>
                    </div>
                    <h1 class="display-8 mb-4">{{ $data->judul }}</h1>
                    
                </div>


                <div class="container shadow rounded-2 p-5 mb-5">
                    
                    <p>{{ $data->deskripsi_lengkap }}</p>
                    <img src="{{ asset('storage/'. $data->gambar) }}" class="img-fluid rounded img-zoomin w-100 mb-3" alt="">
    
                    
                </div>

       </div>
     

     
       
    </div>
    
</x-layouts.app>