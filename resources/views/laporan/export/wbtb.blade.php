<table>
    <thead>
        <tr>
            <th bgcolor="blue" style="color: white; text-align:center;">Nama Karya</th>
            <th bgcolor="blue" style="color: white; text-align:center;">No. Daftar </th>
            <th bgcolor="blue" style="color: white; text-align:center;">Tahun</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Sebaran</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Domain</th>
            <th bgcolor="blue" style="color: white; text-align:center;">Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($wbtb as $item)
            <tr>
                <td>{{ $item->nama_karya }}</td>
                <td>{{ $item->no_daftar }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->sebaran }}</td>
                <td>{{ $item->domain->nama ?? '-' }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
