<h1>Hasil Liga Inggris</h1>
<table border='1'>
    <tr>
        <td>Pertandingan</td>
        <td>Stadion</td>
        <td>Hasil</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['strEvent']}}</td>
        <td>{{$item['strVenue']}}</a></td>
        <td>{{$item['intHomeScore']}} - {{$item['intAwayScore']}}</td>
    </tr>
    @endforeach
</table>
