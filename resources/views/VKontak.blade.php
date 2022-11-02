@extends('Layout')
@section('Content')
<a href="#" class="btn btn-success"> + Add New Data</a>
<br>
<br>


<table class="table table-bordered">
    <tr>
        <th>kode kontak</th>
        <th>nama kontak</th>

        <th>Opsi</th>
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->kd_kontak }}</td>
        <td>{{ $Get->nama_kontak}}</td>

        <td>
            <a href="/controller/edit/{{ $Get->kd_kontak }}" class="btn btn-info">Update</a>
            |
            <a href="/controller/hapus/{{ $Get->kd_kontak}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection