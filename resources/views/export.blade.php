<table>
    <thead>
        <tr>
            <th bgcolor="green">Nama</th>
            <th bgcolor="green">Jenis Kelamin</th>
            <th bgcolor="green">Kelas</th>
            <th bgcolor="green">Berat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($export as $datax)
        <tr>
            <td>{{$datax->nama}}</td>
            <td>{{$datax->jenis_kelamin}}</td>
            <td>{{$datax->kelas}}</td>
            <td>{{$datax->nominal}}</td>
        </tr>
        @endforeach
    </tbody>
</table>