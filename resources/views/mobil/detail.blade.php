<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>

<body>

    <h1>Detail Mobil</h1>
    <table>
        <tbody>
            <tr>
                <th>Nama Mobil</th>
                <td>{{$data->nama_mobil}}</td>
            </tr>
            <tr>
                <th>Tipe</th>
                <td>{{$data->tipe}}</td>
            </tr>
            <tr>
                <th>Tahun Produksi</th>
                <td>{{$data->tahun_produksi}}</td>
            </tr>
            <tr>
                <th>Jumlah Unit</th>
                <td>{{$data->jumlah_unit}} Unit</td>
            </tr>
            <tr>
                <th>Nomor Polisi</th>
                <td>{{$data->no_polisi}}</td>
            </tr>
        </tbody>
    </table>

    <h1>Edit Mobil</h1>
    <form action="{{route('mobil.update', $data->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
        
        <div class="form-group">
            <label>Nama Mobil</label>
            <input type="text" name="nama_mobil" value="{{$data->nama_mobil}}" required>
        </div>
        <div class="form-group">
            <label>Tipe</label>
            <select name="tipe" required>
                <option value="{{$data->tipe}}">{{$data->tipe}}</option>
                <option value="sedan">Sedan</option>
                <option value="sport">Sport</option>
                <option value="lcgc">LCGC</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tahun Produksi</label>
            <input type="number" name="tahun_produksi" value="{{$data->tahun_produksi}}" required>
        </div>
        <div class="form-group">
            <label>Jumlah Unit</label>
            <input type="number" name="jumlah_unit" value="{{$data->jumlah_unit}}" required>
        </div>
        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="no_polisi" value="{{$data->no_polisi}}" required>
        </div>
        <div class="form-group">
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>

</html>