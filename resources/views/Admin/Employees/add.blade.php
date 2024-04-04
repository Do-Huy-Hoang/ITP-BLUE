@extends('Components.admin.admin')
@section('title')
<title>Add | Employee</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
<link rel="stylesheet" href="{{asset('admins/adminStyless.css')}}">
@endsection
@section('Js')
<script src="{{asset('AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.18/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('admins/adminJs.js')}}"></script>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin-products')}}" class="btn btn-link"><i class="fa fa-long-arrow-alt-left" ria-hidden="true"></i> Back</a>
                </div>
                <div class="col-md-12">
                    <div class="panel-body add">
                        <form action="{{route('post-employee-create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="us_name">* Employee name</label>
                                <input  type="text" class="form-control @error('us_name') is-invalid @enderror" id="us_name" name="us_name" placeholder="Enter name product" value="{{old('us_name')}}">
                            </div>
                            @error('us_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email">* Email</label>
                                <input  type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter price product" value="{{old('email')}}">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="us_phone">* Phone</label>
                                <input  type="floatval" class="form-control @error('us_phone') is-invalid @enderror" id="us_phone" name="us_phone" placeholder="Enter quantity product" value="{{old('us_phone')}}">
                            </div>
                            @error('us_phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="price">* Gender</label>
                                <div class="us_gender">
                                    <label>
                                        <input type="radio" name="us_gender" value="Male" checked> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="us_gender" value="Female"> Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="us_birthday">* Birthday</label>
                                <input  type="date" class="form-control @error('us_birthday') is-invalid @enderror" id="us_birthday" name="us_birthday" placeholder="Enter quantity product" value="{{old('us_birthday')}}">
                            </div>
                            @error('us_birthday')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="emp_password">* Password</label>
                                <input  type="text" class="form-control @error('emp_password') is-invalid @enderror" id="emp_password" name="emp_password" placeholder="Enter password" value="{{old('emp_password')}}">
                            </div>
                            @error('emp_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                @foreach($role as $item)
                                @if($item->rol_name != 'Customer')
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="role_id[]" value="{{$item->rol_id }}" @if(in_array($item->rol_id, old('role_id', []))) checked @endif >
                                        {{$item->rol_name}}
                                    </label>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            @error('role_id.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            @error('role_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="custom-form-group">
                                <label for="image">* Employees Image</label>
                                <div class="custom-input-group mb-3">
                                    <div class="custom-file-wrapper">
                                        <label class="custom-file-label" for="inputGroupFile01" id="imageLabel">Choose file</label>
                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div>
@endsection