<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12"> --}}
    {{-- <div class="container"> --}}
    <div class="hero text-white bg-primary hero-bg-parallax">
        <div class="hero-inner">

            <div class="container">

                <h2>Halo, {{ auth()->user()->name }} !</h2>
                <p class="lead">Selamat datang di nguli.id, <br>Bersama kuli membangun negeri, Bersama mandor anti
                    kendor</p>
                @if (auth()->user()->role_id == '2')
                <p>Jadilah kuli yang profesional</p>
                @else
                <p>Jadilah mandor yang bertanggung jawab</p>
                @endif
                <div class="mt-4">
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i
                            class="far fa-user"></i>
                        Lengkapi Akun</a>
                </div>
            </div>

            


        </div>
    </div>

    <div class="container p-5">


        <div class="card p-5 bg-info">
            {{-- <div class="card-header">
                  <h4>Mekanisme Layanan Nguli.id</h4>
                </div> --}}
            <div class="card-body">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2" class=""></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/pengajuan_diri.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mekanisme Pengajuan Diri</h5>
                                <p>Kuli mengajukan diri pada halaman ajukan diri, mandor akan memilih kuli yang sesuai.</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/pencarian_proyek.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mekanisme Pencarian Proyek</h5>
                                <p>Kuli mencari proyek pada halaman cari proyek, setelah melamar kuli harus menunggu persetujuan
                                    dari mandor yang berwenang.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/pencarian_kuli.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mekanisme Pencarian Kuli</h5>
                                <p>Mandor akan mencari kuli yang diinginkan pada halaman cari kuli, kuli akan mengkonfirmasi pemanggilan
                                    mandor tersebut.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/pemasangan_proyek.png" alt="Forth slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Mekanisme Pemasangan Proyek</h5>
                                <p>Mandor akan memasang proyek pada halaman pasang proyek, kuli akan melamar pada proyek tersebut,
                                    lalu mandor akan menyeleksi kuli yang mendaftar.
                                </p>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- <div class="container">
        <div class="card">
            <div class="card-header">
              <h4>Mekanisme Layanan Nguli.id</h4>
            </div>
            <div class="card-body">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class=""></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="1" class="active"></li>
                  <li data-target="#carouselExampleIndicators2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/gambar-tanah.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Heading</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/gambar-rumah.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Heading</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/gambar-kuli1.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Heading</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
    </div> --}}

    {{-- <div class="py-12"> --}}
    {{-- <div class="container p-3">
        <div class="card">
            <div class="card-header">
                <h4>Mekanisme Pengajuan Diri</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-address-book"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Kuli Mengajukan Diri
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Mandor Mencari Kuli
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Mandor Memanggil Kuli
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-success">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Siap Kerja
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- </div> --}}

    {{-- <div class="py-12"> --}}
    {{-- <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Mekanisme Pemasangan Proyek</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-fax"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Mandor Memasang Proyek
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Kuli Mencari Proyek
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-active">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Mandor Menerima Kuli
                                </div>
                            </div>
                            <div class="wizard-step wizard-step-success">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="wizard-step-label">
                                    Siap Kerja
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- </div> --}}
</x-app-layout>
