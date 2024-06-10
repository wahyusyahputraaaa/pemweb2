<x-layout>
    <x-slot name="page_name"> Halaman Pasien Puskesmas</x-slot>
    <x-slot name="page_content">

    @if (session('tambah'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('tambah') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('update') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('pesan'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('pesan') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
        <h3>Data Pasien</h3>
        <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-danger">+ Tambah Pasien</a>
        <table class="table table-bordered"> 
            <tr class="table-primary">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Fakses</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $pasien->id }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->kel_nama }}</td> 
                    <td> 
                        <a href="{{ url('dashboard/pasien/show', $pasien->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('dashboard/pasien/edit', $pasien->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{ url('dashboard/pasien/destroy', $pasien->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>  
</x-layout>