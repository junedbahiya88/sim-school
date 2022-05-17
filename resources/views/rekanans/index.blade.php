@extends('adminlte::page')
@section('title', 'List Rekanan')
@section('content_header')
    <h1 class="m-0 text-dark">List Rekanan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('rekanan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>PIC</th>
                            <th>Telp</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rekanans as $key => $rekanan)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$rekanan->nama_rekanan}}</td>
                                <td>{{$rekanan->alamat}}</td>
                                <td>{{$rekanan->pic}}</td>
                                <td>{{$rekanan->telp}}</td>
                                <td>{{$rekanan->fax}}</td>
                                <td>{{$rekanan->email}}</td>

                                <td>
                                    <!--<a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('users.destroy', $user)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>-->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush