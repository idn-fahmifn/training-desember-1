<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>

<body>
    <h1>Edit Mobil</h1>
    <form action="#" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Mobil</label>
            <input type="text" name="nama_mobil" required>
        </div>
        <div class="form-group">
            <label>Tipe</label>
            <select name="tipe" required>
                <option value="">-Pilih Tipe Mobil-</option>
                <option value="sedan">Sedan</option>
                <option value="sport">Sport</option>
                <option value="lcgc">LCGC</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tahun Produksi</label>
            <input type="number" name="tahun_produksi" required>
        </div>
        <div class="form-group">
            <label>Jumlah Unit</label>
            <input type="number" name="jumlah_unit" required>
        </div>
        <div class="form-group">
            <label>No Polisi</label>
            <input type="text" name="no_polisi" required>
        </div>
        <div class="form-group">
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>

</html>