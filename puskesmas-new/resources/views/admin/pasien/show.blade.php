<x-layout>
    <x-slot name="page_name">Halaman Pasien / Create</x-slot>
    <x-slot name="page_content">
        <table class='table table-bordered'>
            <tr class='table-primary'>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Fakses</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kel_nama }}</td> 
                <td>{{ $pasien->created_at }}</td>
                <td>{{ $pasien->updated_at }}</td>               
            </tr>
        </table>
    </x-slot>
</x-layout>