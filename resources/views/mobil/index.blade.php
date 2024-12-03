@extends('template.template')

@section('content')

<div class="card mt-4">
    <div class="card-body">
        <h4 class="card-title">Halaman Data Mobil</h4>

        <table class="table table-striped mt-4">
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
                        <form action="{{route('mobil.delete', $item->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <a class="btn btn-info" href="{{route('mobil.detail', $item->id)}}">detail</a>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


@endsection