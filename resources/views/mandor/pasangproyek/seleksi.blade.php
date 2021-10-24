<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seleksi Kuli') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container p-1 rounded-3">
            <div class="card author-box card-primary">
                <div class="card-body">

                    @foreach ($profil as $p)
                    <div class="author-box-name">

                    </div>
                    <div class="card">

                        <div class="card-header">
                            <h5>{{ $p->name }}</h5>
                        </div>
                        <img alt="image" src='/assets/img/avatar/avatar-4.png' class="img-center p-3" data-toggle="tooltip"
                            title="" width="256">
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

                                <div class="row">
                                    <div class="col">
                                        <h5>Pengalaman:</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5>{{ $p->experience }}</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h5>Spesialisasi:</h5>
                                    </div>
                                    <div class="col-8">
                                        <h5>{{ $p->kuli_specialties }}</h5>
                                    </div>
                                </div>
                            </div>
                </div>

            </div>



            <div class="float-right mt-sm-0 mt-3 p-4">
                {{-- <a href="#" class="btn btn-danger mt-3 follow-btn" data-follow-action="alert('follow clicked');"
                    data-unfollow-action="alert('unfollow clicked');" data-nama = {{ $p->name }}>Hapus</a> --}}
                <form action="{{ url('/terima') }}" method="post">
                    @csrf
                    <input type="hidden" id="kuli_id" name="kuli_id" value={{ $p->id }}>
                    <button type="submit" class="btn btn-primary" data-notelp={{ $p->phone_number }}>Terima</button>
                </form>
                <br><br>
                <form action="{{ url('/tolak') }}" method="post">
                    @csrf
                    <input type="hidden" id="kuli_id" name="kuli_id" value={{ $p->id }}>
                    <button type="submit" class="btn btn-danger" data-nama={{ $p->name }}>Tolak</button>
                </form>
            </div>

            @endforeach




            <script>
                deleteButtons = document.querySelectorAll('.btn-danger');
                acceptButtons = document.querySelectorAll('.btn-primary');

                deleteButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        alert('Berhasil menolak lamaran kuli');
                    });
                });

                acceptButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        alert('Kuli ditambahkan ke daftar Kuli Anda, hubungi segera kuli tersebut pada nomor telepon : ' + btn.dataset.notelp);

                    });
                });

            </script>


            <div class="float-left mt-sm-0 mt-3">
                <br>
                <a href="javascript:history.back()" class="btn"><i class="fas fa-chevron-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    </div>

    </div>
</x-app-layout>
