<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Barang</title>
</head>

<body>
    <h1>Tambah Data Barang</h1>

    <form action="{{route('biodata.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label>Merek</label>
            <input type="text" name="merek" required>
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" required>
        </div>
        <div class="form-group">
            <label>Kondisi</label>
            <input type="text" name="kondisi" required>
        </div>
        <div class="form-group">
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>

</html>