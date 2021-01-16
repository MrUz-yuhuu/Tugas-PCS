<h1>Jadwal Liga Inggris</h1>
<table border='1'>
    <tr>
        <td>Pertandingan</td>
        <td>Stadion</td>
        <td>Tanggal</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['strEvent']}}</td>
        <td>{{$item['strVenue']}}</a></td>
        <td>{{$item['dateEvent']}}</td>
    </tr>
    @endforeach
</table>