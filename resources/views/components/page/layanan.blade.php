<x-layouts.app>
    
    <div class="container service mt-5">

       <div class="container py-5 ">

                <div class="section-title mb-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Layanan</h4>
                    </div>
                    <h1 class="display-8 mb-4">{{ $data->judul }}</h1>
                </div>

    <div class="row">
        <div class="col-md-6">

            <div class="card mt-3">
                <h5 class="card-header bg-primary text-white">DAFTAR LAYANAN :</h5>
                <div class="card-body">
                    {!! $data->deskripsi_lengkap !!}
                </div>
            </div>

        </div>

          <div class="col-md-6">

            <div class="card mt-3">
                <h5 class="card-header bg-success text-white">PERSYARATAN :</h5>
                <div class="card-body">
                    {!! $data->persyaratan !!}
                </div>
            </div>

        </div>
    </div>
          
  

       </div>
       


    </div>

    

</x-layouts.app>