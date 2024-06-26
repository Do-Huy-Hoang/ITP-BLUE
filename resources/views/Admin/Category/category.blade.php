@extends('Components.admin.admin')
@section('title')
<title>Category</title>
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
            Categories
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">categories</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4 ">
                                @can('categories-add')
                                <div class="button">
                                    <a href="{{ route('admin-categories-add') }}"><button class="btn btn-success btn-add">Add Category</button></a>              
                                </div>
                                @endcan
                            </div>
                            <div class="col-xs-8 ">
                                <form method="GET" action="{{route('admin-categories')}}" id="form-search">
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
                                    <th>Image(s)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $item)
                                <tr>
                                    <td>{{$item->cate_id}}</td>
                                    <td>{{ $item->cate_name }}</td>
                                    <td>
                                        @if($item->cate_img)
                                        <img class="img" src="data:image/jpeg;base64,{{ base64_encode($item->cate_img) }}">
                                        @endif
                                    </td>
                                    <td>
                                        @can('categories-edit')
                                        <a href="{{ route('admin-categories-edit', ['id'=>$item->cate_id,'page' => $categories->currentPage()]) }}" class="btn btn-success" role="button">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        @endcan
                                        @can('categories-delete')
                                        <a href="{{ route('admin-categories-delete', ['id' => $item->cate_id, 'page' => $categories->currentPage()]) }}" class="btn btn-danger" role="button" onclick="confirmDelete(event,this)">
                                            <i class="fa fa-fw fa-trash-o"></i>
                                        </a>
                                        @endcan
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
                        {{ $categories->appends(Request::except('page'))->links()}}
                         </div>                  
                </div>        
            </div>     
        </div>     
    </section>
</div>
@endsection