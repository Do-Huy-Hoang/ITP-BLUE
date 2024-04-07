@extends('Components.admin.admin')
@section('title')
<title>Edit | Employee</title>
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin-products')}}" class="btn btn-link"><i class="fa  fa-chevron-left" ria-hidden="true"></i> Back</a>
                </div>
                <div class="col-md-12">
                    <div class="panel-body add">
                        <form action="{{route('post-employee-update', ['id'=> $employee->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="us_name">Employee name</label>
                                <input type="text" class="form-control" id="us_name" name="us_name" placeholder="Enter name product" value="{{$employee->us_name}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter price product" value="{{$employee->email}}" disabled>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="us_phone">Phone</label>
                                <input type="floatval" class="form-control" id="us_phone" name="us_phone" value="{{$employee->us_phone}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="us_phone">Gender</label>
                                <input type="floatval" class="form-control" id="us_phone" name="us_phone" value="{{$employee->us_gender}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="us_birthday">Birthday</label>
                                <input type="date" class="form-control" id="us_birthday" name="us_birthday" value="{{$employee->us_birthday}}" disabled>
                            </div>
                            <div class="form-group">
                                @foreach($role as $item)
                                @if($item->rol_name != 'Customer')
                                <div class="checkbox">
                                    <label>
                                        @php
                                        $isChecked = false;
                                        if (is_null(old('role_id')) && in_array($item->rol_id, $employeeRoles)) {
                                        $isChecked = true;
                                        }
                                        if(!is_null(old('role_id')) && in_array($item->rol_id, old('role_id', []))) {
                                            $isChecked = true;
                                        }
                                        @endphp
                                        <input type="checkbox" name="role_id[]" {{ $isChecked ? 'checked' : '' }} value="{{$item->rol_id}}">
                                        {{$item->rol_name}}
                                    </label>
                                </div>
                                @endif
                                @endforeach
                                @error('role_id.*')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @error('role_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection