<x-layouts.app>

    <div class="container service mt-5">

        <!-- Sejarah Start -->
       <div class="container py-5 ">

                <div class="section-title mb-5 wow fadeInUp pt-5" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Profil</h4>
                    </div>
                    <h1 class="display-8 mb-4">{{ $data->nama }}</h1>
                </div>

                <div class="container shadow rounded-2 p-5 mb-5">
                    {!! $data->sejarah !!}
                </div>

                <div class="container shadow rounded-2 p-5 mb-5">
                    {!! $data->visimisi !!}
                </div>

                <div class="container shadow rounded-2 p-5">
                    <h5>Struktur Organisasi</h5>
                    <img src="{{ asset('storage/'. $data->struktur) }}" class="img-fluid rounded img-zoomin w-100 mb-3" alt="">
  
                </div>

       </div>
       <!-- Sejarah End -->

       <!-- Start Google Map -->
       <div class="container my-4">
            <h3>Peta Wilayah</h3>

            <div class="ratio ratio-16x9">

           {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45785.34800502186!2d125.0740976672702!3d1.438874485127385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328706a6078968a3%3A0x6d37d55c2ad2c7dd!2sGirian%2C%20Bitung%20City%2C%20North%20Sulawesi!5e1!3m2!1sen!2sid!4v1764979986210!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

            <iframe src="{{ $data->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </div>
        <!-- End Google Map -->
       
    </div>
    
</x-layouts.app>