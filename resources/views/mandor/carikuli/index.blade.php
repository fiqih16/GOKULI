<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Kuli') }}
        </h2>
    </x-slot>

    <div>
        {{-- <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> --}}
        


        <div class="container p-3 my-3 bg-primary rounded-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kuli Tersedia</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Spesialisasi</th>
                                        <th>Action</th>
                                    </tr>

                                    @foreach ($kuli_available as $k)
                                    <tr>
                                        <td>
                                            <img alt="image" src='/assets/img/avatar/avatar-4.png'
                                                class="rounded-circle" width="35" data-toggle="tooltip" title="">
                                        </td>
                                        <td>{{ $k->name }}</td>
                                        <td>{{ $k->address }}</td>
                                        <td>{{ $k->kuli_specialties }}</td>
                                        <td>
                                            <form action="{{ url('/mandor/carikuli/detailkuli') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                                {{-- <a href="javascript:$('form').submit()">{{ $k->name }}</a> --}}
                                                <button type="submit" class="btn btn-primary">Panggil</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
