<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>

<style>
    .styled-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
  background-color: #009879;
  color: #fff;
  text-align: left;
}

.styled-table th, .styled-table td {
  padding: 12px 15px;
}

.styled-table tbody tr {
  border-bottom: 1px solid #ddd;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

.title, .list {
  font-family: sans-serif;
  font-weight: bold;
  color: #009879;
}

.list {
  margin-top: 1px;
  font-size: 12px;
  padding-left: 20px;
}

span {
  font-family: sans-serif;
  font-size: 14px;
  color: red;
}

.text-center {
  text-align: center;
}
</style>

<h3 class="title">HASIL AKHIR FUZZY TAHANI</h3>

<body>
    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                @foreach ($kriteria as $item)
                    <th>{{ $item->kriteria }}
                    </th>
                @endforeach
                <th>Fire Strength</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
            
            <tr class="active-row">
                <td>{{ $loop->index +1 }}.</td>
                <td>{{$karyawan->nama}}</td>
                @foreach ($kriteria as $item)
                <td class="text-center">
                    @if($karyawan->himpunan->where('kriteria_id', $item->id_kriteria)->first())
                        {{ $karyawan->himpunan->where('kriteria_id',
                        $item->id_kriteria)->first()->pivot->nilai }}
                        @else
                        -
                    @endif
                </td>
                @endforeach
                <td class="text-center">{{ number_format($karyawan->himpunan->sum('pivot.nilai') / ($karyawan->himpunan->count()?: 1), 2)?? '0.00' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <span>* Catatan:</span>
    <ul class="list"> 
        @foreach ($kriteria as $item)
        <li>{{ $item->kriteria }} = {{ $item->himpunan->whereIn('id_himpunan', $id)->first()->nama_himpunan ?? '-' }}</li>   
        @endforeach
    </ul>
</body>

</html>