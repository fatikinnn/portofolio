@extends('dashboard.index')

@section('konten')

<p class="card-title">Halaman</p>
<div class="pb-3"><a href="{{ route('halaman.create') }}" class="btn btn-primary">+ Tambah Halaman</a></div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th>Judul</th>
                <th class="col-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($data as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->judul}}</td>
                <td>
                    <a href="{{route('halaman.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
