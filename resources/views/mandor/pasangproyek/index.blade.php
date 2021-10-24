<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pasang Proyek') }}
        </h2>
    </x-slot>

    <div>
        {{-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> --}}
        <div class="container p-3 my-3 bg-info rounded-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Proyek Anda</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    {{-- Contoh Data --}}
                                    @if (count($proyek) == 0)
                                    <tr>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="empty-state" data-height="400" style="height: 400px;">
                                                    <div class="empty-state-icon">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h2>Anda belum memasang proyek</h2>
                                                    <p class="lead">
                                                        Silahkan mengisi formulir dibawah untuk memasang proyek, data
                                                        proyek nantinya akan tampil disini
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @else
                                    <tr>
                                        <th>Nama Proyek</th>
                                        <th>Lokasi</th>
                                        <th>Spesialisasi Kuli Dibutuhkan</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($proyek as $p)
                                    <tr>
                                        <td>{{ $p->name }}
                                        </td>
                                        <td>{{ $p->address }}</td>
                                        <td>{{ $p->specialties_needed }}</td>
                                        <td>
                                            {{-- <form action="{{ url('/hapusproyek') }}" method="post">
                                            @csrf
                                            <input type="hidden" id="proyek_id" name="proyek_id" value={{ $p->id }}>
                                            <button type="submit" class="btn btn-danger"
                                                data-nama={{ $p->name }}>Hapus</button>
                                            </form> --}}

                                            <form action="{{ url('/mandor/pasangproyek/detailproyek') }}" method="get">
                                                @csrf
                                                <input type="hidden" id="proyek_id" name="proyek_id" value={{ $p->id }}>
                                                <button type="submit" class="btn btn-primary">Detail</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                    {{-- <script>
                                            deleteButtons = document.querySelectorAll('.btn');
                                            deleteButtons.forEach(btn => {
                                                btn.addEventListener('click', () => {
                                                    let konfirmasi = confirm(
                                                        'Apakah anda yakin menghapus Proyek ' + btn
                                                        .dataset.nama + ' ?');
                                                });
                                            });

                                        </script> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <p class="text-black">#Keterangan : klik nama proyek untuk melihat detail atau edit</p> --}}

                {{-- </div> --}}

            </div>

            <div class="container p-4 my-3 bg-primary text-black rounded-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Formulir Pendaftaran Proyek</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ url('/proyekbaru') }}" method="post">
                                    @csrf
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                            Proyek</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="nama" name="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi
                                            Proyek</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="lokasi" name="lokasi" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Detail
                                            Proyek</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="detail" name="detail" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Spesifikasi
                                            Kuli Dibutuhkan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" id="spek" name="spek" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Pasang</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                        #Keterangan : Detail proyek mencakup gaji dan posisi kuli

                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
