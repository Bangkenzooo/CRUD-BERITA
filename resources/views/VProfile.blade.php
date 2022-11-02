@extends('Layout')
@section('Content')
<a href="#" class="btn btn-success"> + Add New Data</a>
<br>
<br>

<table class="table table-bordered">
    <tr>
        <th>kode profile</th>
        <th>nama profile</th>

        <th>Opsi</th>
    </tr>
    @foreach($profile as $Get)
    <tr>
        <td>{{ $Get->kd_profile }}</td>
        <td>{{ $Get->nama_profile }}</td>

        <td>
            <a href="/controller/edit/{{ $Get->kd_profile }}" class="btn btn-info">Update</a>
            |
            <a href="/controller/hapus/{{ $Get->kd_profile}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection