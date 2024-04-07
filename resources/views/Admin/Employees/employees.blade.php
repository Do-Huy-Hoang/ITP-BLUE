@extends('Components.admin.admin')
@section('title')
<title>List User</title>
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
            List User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">list user</li>
        </ol>
    </section>  
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4 ">
                                @can('employees-add')
                                <div class="button">
                                    <a href="{{ route('admin-employees-add') }}"><button class="btn btn-success btn-add">Add Employees</button></a>
                                </div>
                                @endcan
                            </div>
                            <div class="col-xs-8 ">
                                <form method="GET" action="{{route('admin-employees')}}" id="form-search">
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
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{ $item->us_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @foreach ($item->roles as $role)
                                        {{ $role->rol_name }}
                                        @if (!$loop->last)
                                        ,
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($item->id != Auth::user()->id)
                                        @can('employees-edit')
                                        <a href="{{ route('admin-employees-edit', ['id'=>$item->id,'page' => $employees->currentPage()]) }}" class="btn btn-success" role="button">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        @endcan
                                        @can('employees-delete')
                                        <a href="{{ route('admin-employees-delete', ['id' => $item->id, 'page' => $employees->currentPage()]) }}" class="btn btn-danger" role="button" onclick="confirmDelete(event,this)">
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
                                    <th>Image(s)</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        {{ $employees->appends(Request::except('page'))->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection