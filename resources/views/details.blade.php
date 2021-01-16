<h1>Details AC Milan</h1>
<table border='1'>
    <tr>
        <td>Nama Tim</td>
        <td>Nama Stadion</td>
        <td>Julukan</td>
        <td>Selengkapnya</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['strAlternate']}}</td>
        <td>{{$item['strStadium']}}</td>
        <td>{{$item['strKeywords']}}</td>
        <td><a href="<?php echo url('detailklub') ?>">Klik Disini</a></td>
    </tr>
    @endforeach
</table>
