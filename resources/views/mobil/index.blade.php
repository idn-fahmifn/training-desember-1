<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
</head>
<body>
    <h1>List data mobil</h1>
    <table>
        <!-- header -->
        <thead>
            <th>Nama Mobil</th>
            <th>No Polisi</th>
            <th>Pilihan</th>
        </thead>

        <!-- data mobil -->
        <tbody>
            <!-- looping data -->
            @foreach ($data as $item) 
            <tr>
                <!-- data yang di looping masuk ke dalaman tag TD -->
                <td>{{$item->nama_mobil}}</td>
                <td>{{$item->no_polisi}}</td>
                <td>
                    <a href="#">detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>