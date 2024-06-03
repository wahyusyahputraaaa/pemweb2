<x-layout>
    <x-slot name="page_name"> Halaman Kelurahan Puskesmas</x-slot>
    <x-slot name="page_content">
        <h3>Data Kelurahan</h3>
        <a href="{{ url('dashboard/kelurahan/create') }}" class="btn btn-danger">+ Tambah Kelurahan</a>
        <table class="table table bordered"> 
            <tr class="table-primary">
                <th>Id</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_kelurahan as $kelurahan)
                <tr>
                    <td>{{ $kelurahan->id }}</td>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>{{ $kelurahan->kecamatan_nama }}</td>
                    <td>
                        <a href="{{ url('dashboard/kelurahan/show', $kelurahan->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>  
</x-layout>