<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Form Umur</title>
</head>
<body>

    <h1>Halaman Cek Umur</h1>

    <!-- jika tidak memenuhi syarat, show error -->
    @if (session('error'))
        <span style="color: red;">Whoops! {{session('error')}}</span>
    @endif

    <form action="{{route('proses')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Umur Kamu?</label>
            <input type="number" name="umur" required>
        </div>
        <div class="form-group">
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>
</html>