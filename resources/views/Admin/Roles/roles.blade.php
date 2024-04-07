@extends('Components.admin.admin')

@section('title')
<title>Roles</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('admins\adminStyless.css')}}">
@endsection
@section('Js')
<script>
    $(function() {
        $('#example1').DataTable({
            'paging': false,
            'lengthChange': false,
            'searching': false,
            'ordering': false,
            'info': false,
            'autoWidth': false
        })
    })
</script>
<script src="{{asset('admins\adminJs.js')}}"></script>
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Roles
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Roles</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4 ">
                                @can('roles-add')
                                <div class="button">       
                                    <a href="{{ route('admin-roles-add') }}"><button class="btn btn-success btn-add">Add Role</button></a>                                      
                                 </div>
                                @endcan
                            </div>
                            <div class="col-xs-8 ">
                                <form method="GET" action="{{route('admin-roles')}}" id="form-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" id="search" placeholder="Search by Name">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-fw fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description of the role</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $item)
                                <tr>
                                    <td>{{$item->rol_id}}</td>
                                    <td>{{ $item->rol_name }}</td>
                                    <td>{{ $item->rol_display_name }}</td>
                                    <td>
                                        @if($item->rol_name != "Customer" && $item->rol_name != "Admin")
                                            @can('roles-edit')
                                            <a href="{{ route('admin-roles-edit', ['id'=>$item->rol_id]) }}" class="btn btn-success" role="button">
                                                <i class="fa fa-fw fa-edit"></i>
                                            </a>
                                            @endcan
                                            @can('roles-delete')
                                            <a href="{{ route('admin-roles-delete', ['id' => $item->rol_id]) }}" class="btn btn-danger" role="button" onclick="confirmDelete(event,this)">
                                                <i class="fa fa-fw fa-trash-o"></i>
                                            </a>
                                            @endcan
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description of the role</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        {{ $roles->links()}}
                        </div>                  
                </div>        
            </div>     
        </div>     
    </section>
</div>
@endsection