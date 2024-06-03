<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Create</x-slot>
    <x-slot name="page_content">
        <table class='table table-bordered'>
            <tr class='table-primary'>
                <th>No</th>
                <th>Id</th>
                <th>Nama kelurahan</th>
                <th>Nama kecamatan</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kelurahan-> id }}</td>
                <td>{{ $kelurahan-> nama }}</td>
                <td>{{ $kelurahan-> kecamatan_nama }}</td>
                <td>{{ $kelurahan-> created_at }}</td>
                <td>{{ $kelurahan-> updated_at }}</td>               
            </tr>
        </table>
    </x-slot>
</x-layout>
