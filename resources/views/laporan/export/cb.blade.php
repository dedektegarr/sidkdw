<table>
    <thead>
        <tr>
            <th bgcolor="blue" style="color: white; text-align:center;">Nama Objek</th>
            <th bgcolor="blue" style="color: white; text-align:center;">SK Penetapan </th>
            <th bgcolor="blue" style="color: white; text-align:center;">Jenis </th>
            <th bgcolor="blue" style="color: white; text-align:center;">Desa/Kelurahan</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Kecamatan </th>
            <th bgcolor="blue" style="color: white; text-align:center;">Kabupaten/Kota</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Provinsi</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Level </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cb as $item)
            <tr>
                <td>{{ $item->nama_objek }}</td>
                <td>{{ $item->sk_penetapan }}</td>
                <td>{{ $item->jenis->nama }}</td>
                <td>{{ $item->status->nama }}</td>
                <td>{{ $item->desa_kelurahan }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td>{{ $item->kabupaten_kota }}</td>
                <td>{{ $item->provinsi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
