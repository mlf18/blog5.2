@extends('admin.layouts.app')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @include('admin.layouts.pesan')
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Body</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beritas as $berita)
                                <tr>
                                    <td>{{$berita->id}}</td>
                                    <td>{{$berita->judul}}</td>
                                    <td>{{$berita->body}}</td>
                                    <td>{{$berita->gambar}}</td>
                                    <td>
                                        <form action="{{url('/admin/berita/'.$berita->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a href="{{url('/admin/berita/'.$berita->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>|
                                            <a href="{{url('/admin/berita/'.$berita->id)}}" class="btn btn-info"><i class="fa fa-eye"></i>Show</a>|
                                            <button type="submit" id="delete-berita-{{ $berita->id }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                   
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    
    <!-- /.row -->
   
    <!-- /.row -->
    
    <!-- /.row -->
</div>
@endsection