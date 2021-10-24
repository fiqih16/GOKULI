<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajukan Diri') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- <div class="col-12 col-md-6 col-lg-6"> --}}



            <div class="container p-3 my-3 bg-info text-black rounded-3">

                @if (auth()->user()->called == 1 && auth()->user()->status_id == 4)

                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3>Panggilan</h3>
                        </div>
                        <div class="card-body">
                            <h4>Anda mendapatkan panggilan dari:</h4>

                            <div class="container p-1 rounded-3">
                                <div class="card author-box card-primary">
                                    <div class="card-body">

                                        @foreach ($users as $p)
                                        @if ($p->id == auth()->user()->works_under)

                                        <div class="card">

                                            <div class="card-header">
                                                <h5>{{ $p->name }}</h5>
                                            </div>
                                            <img alt="image" src='/assets/img/avatar/avatar-4.png'
                                                class="img-center p-3" data-toggle="tooltip" title="" width="256">
                                            <div class="card-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5>Nama:</h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5>{{ $p->name }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <h5>Alamat:</h5>
                                                        </div>
                                                        <div class="col-8">
                                                            <h5>{{ $p->address }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="float-right mt-sm-0 mt-3 p-4">
                                            {{-- <a href="#" class="btn btn-danger mt-3 follow-btn" data-follow-action="alert('follow clicked');"
                                        data-unfollow-action="alert('unfollow clicked');" data-nama = {{ $p->name }}>Hapus</a>
                                            --}}
                                            <form action="{{ url('/terimapanggilan') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary"
                                                    data-notelp={{ $p->phone_number  }}>Terima</button>
                                            </form>

                                        </div>

                                        <div class="float-left mt-sm-0 mt-3">
                                            <br>
                                            <form action="{{ url('/tolakpanggilan') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    data-nama={{ $p->name }}>Tolak</button>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach




                                        <script>
                                            deleteButtons = document.querySelectorAll('.btn-danger');
                                            acceptButtons = document.querySelectorAll('.btn-primary');

                                            deleteButtons.forEach(btn => {
                                                btn.addEventListener('click', () => {
                                                    alert('Berhasil menolak panggilan mandor');
                                                });
                                            });

                                            acceptButtons.forEach(btn => {
                                                btn.addEventListener('click', () => {
                                                    alert(
                                                        'Anda menerima panggilan kuli, anda secara resmi telah bekerja, silakan menunggu pesan dari mandor Anda'
                                                    );

                                                });
                                            });

                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                @elseif (auth()->user()->called == 1 && auth()->user()->status_id == 2)

                <div class="py-12">
                    <div class="container p-1 rounded-3">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Anda sedang bekerja</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h5>Selamat bekerja kuliawan!</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @elseif (auth()->user()->status_id == 3)

                    <div class="container p-1 rounded-3">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                    <div class="card-header">
                                        <h2>Konfirmasi pelepasan kerja</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-8">
                                            <h5>Mandor melakukan permintaan pelepasan kerja. (Konfirmasi jika kerja
                                                selesai dan
                                                pembayaran telah dilakukan)</h5>
                                        </div>

                                        <div class="float-left mt-sm-0 mt-3">
                                            <br>
                                            <form action="{{ url('/konfirmasi') }}" method="post">
                                                @csrf
                                                <button type="submit" id="tombol" class="btn btn-warning"
                                                    data-status="1">
                                                    <i class="fas fa-check"></i> Konfirmasi</button>

                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


    @else

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Pengajuan Diri</h4>
                </div>
                <div class="card-body">
                    Dengan mengajukan diri, status anda menjadi available, yang berarti siap dipanggil kerja
                    kapanpun.
                    <br>
                    Anda bisa membatalkan kapanpun.
                </div>


                @if (auth()->user()->kuli_availability == 0)
                <div class="card-footer text-right">
                    <form action="{{ url('/ready') }}" method="post">
                        @csrf
                        <button type="submit" id="tombol" class="btn btn-primary" data-status="0">
                            <i class="fas fa-address-book"></i> Ajukan
                            Diri</button>
                    </form>
                </div>
                @endif

                @if (auth()->user()->kuli_availability == 1)
                <div class="card-footer text-right">
                    {{-- <form method="post">

                                </form> --}}
                    <form action="{{ url('/cancel') }}" method="post">
                        @csrf
                        <button type="submit" id="tombol" class="btn btn-danger" data-status="1">
                            <i class="fas fa-times"></i> Batal
                            Ajukan Diri</button>

                    </form>
                </div>
                @endif

                <script>
                    function ready() {
                        alert('Berhasil mengajukan diri dan mengubah status Anda');
                    }

                    function cancel() {
                        alert('Berhasil membatalkan pengajuan diri dan mengubah status Anda');
                    }
                    const btn = document.querySelector('.btn');
                    const data = btn.dataset.status;
                    btn.addEventListener('click', () => {
                        if (data == "0") {
                            ready();
                        } else {
                            cancel();
                        }
                    });

                </script>

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Keterangan</h4>
                </div>
                <div class="card-body">
                    @if (auth()->user()->kuli_availability == 0)
                    <div class="card-body">
                        <p class="card-text">Status Anda saat ini tidak siap panggil (Unavailable)</p>
                    </div>
                    @endif

                    @if (auth()->user()->kuli_availability == 1)
                    <div class="card-body">
                        <p class="card-text">Status Anda saat ini siap panggil (Available)</p>
                        <br>
                        <p class="card-text">Silahkan cek halaman ini secara berkala untuk melihat panggilan
                            mandor (Fitur notifikasi coming soon)</p>

                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif



    </div>
    {{-- </div> --}}
    </div>





    </div>
</x-app-layout>

{{-- <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
            </div>

            <script>
                function ready() {
                    alert('Berhasil mengajukan diri dan mengubah status Anda');
                }

                function cancel() {
                    alert('Berhasil membatalkan pengajuan diri dan mengubah status Anda');
                }
                const btn = document.querySelector('.btn');
                const data = btn.dataset.status;
                btn.addEventListener('click', () => {
                    if (data == "0") {
                        ready();
                    } else {
                        cancel();
                    }
                });

            </script>

        </div>
    </div>
</div> --}}
