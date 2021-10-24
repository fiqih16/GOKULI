<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kuli Anda') }}
        </h2>
    </x-slot>

    <div>
        {{-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> --}}



        <div class="container p-3 my-3 bg-primary rounded-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kuli Anda</h4>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    @if (count($kulis) == 0)
                                    <tr>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="empty-state" data-height="400" style="height: 400px;">
                                                    <div class="empty-state-icon">
                                                        <i class="fas fa-question"></i>
                                                    </div>
                                                    <h2>Anda belum memiliki kuli yang bekerja untuk anda</h2>
                                                    <p class="lead">
                                                        Silahkan mencari kuli atau memasang proyek Anda.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @else

                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($kulis as $k)
                                    <tr>
                                        <td>
                                            <img alt="image" src='/assets/img/avatar/avatar-4.png'
                                                class="rounded-circle" width="35" data-toggle="tooltip" title="">
                                        </td>
                                        <th>{{ $k->name }}</th>
                                        <th>{{ $k->address }}</th>
                                        <th>{{ $k->phone_number }}</th>

                                        @if ($k->status_id == '1')
                                        @foreach ($statuses as $s)
                                        @if ($s->id == $k->status_id)
                                        <th>{{ $s->name }}</th>
                                        <th>
                                            <a href="{{ url('/mandor/pasangproyek') }}"
                                                class="btn btn-primary">Tentukan</a>
                                        </th>
                                        @endif
                                        @endforeach

                                        @elseif ($k->status_id == '2')
                                        @foreach ($statuses as $s)
                                        @if ($s->id == $k->status_id)
                                        <th>{{ $s->name }}</th>
                                        <th>
                                            <form action="{{ url('/selesai') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                                {{-- <a href="javascript:$('form').submit()">{{ $p->name }}</a> --}}
                                                <button type="submit" class="btn btn-success">Selesai</button>
                                            </form>
                                        </th>
                                        @endif
                                        @endforeach

                                        @elseif ($k->status_id == '3')
                                        @foreach ($statuses as $s)
                                        @if ($s->id == $k->status_id)
                                        <th>{{ $s->name }}</th>
                                        <th>
                                            <form action="{{ url('/batalselesai') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                                {{-- <a href="javascript:$('form').submit()">{{ $p->name }}</a> --}}
                                                <button type="submit" class="btn btn-warning">Batal</button>
                                            </form>
                                        </th>
                                        @endif
                                        @endforeach

                                        @elseif ($k->status_id == '4')
                                        @foreach ($statuses as $s)
                                        @if ($s->id == $k->status_id)
                                        <th>{{ $s->name }}</th>
                                        <th>
                                            <form action="{{ url('/batalpanggil') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                                {{-- <a href="javascript:$('form').submit()">{{ $p->name }}</a> --}}
                                                <button type="submit" class="btn btn-warning">Batal</button>
                                            </form>
                                        </th>
                                        @endif
                                        @endforeach

                                        @elseif ($k->status_id == '5')
                                        @foreach ($statuses as $s)
                                        @if ($s->id == $k->status_id)
                                        <th>{{ $s->name }}</th>
                                        <th>
                                            <form action="{{ url('/hapus') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                                {{-- <a href="javascript:$('form').submit()">{{ $p->name }}</a> --}}
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </th>
                                        @endif
                                        @endforeach
                                        @endif
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</x-app-layout>
