@extends('template.template')

@section('content')
<table class="table table-striped">
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
                    <a href="{{route('mobil.detail', $item->id)}}">detail</a>
                    <button type="submit" onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection