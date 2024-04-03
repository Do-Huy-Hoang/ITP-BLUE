@extends('Components.admin.admin')
@section('title')
<title>Edit | Roles</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('admins\Roles\Roles.css')}}">
@endsection
@section('Js')
<script src="{{asset('admins\Roles\Roles.js')}}"></script>
<script src="{{asset('admins\adminJs.js')}}"></script>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin-roles')}}" class="btn btn-link"><i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i> Back</a>
                </div>
                <div class="col-md-12">
                    <div class="panel-body">
                        <form method="post" action="{{ route('post-roles-update', ['id' => $roleCheckd->rol_id]) }}" enctype="multipart/form-data" id="edit">
                            @csrf
                            <!-- name -->
                            <div class="form-group">
                                <label for="rol_name">Roles name</label>
                                <input required="true" type="text" class="form-control @error('rol_name') is-invalid @enderror" id="rol_name" name="rol_name" placeholder="Enter role name" value="{{ old('rol_name', $roleCheckd->rol_name) }}">
                                @error('rol_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- display_name -->
                            <div class="form-group">
                                <label for="display_name">Display name</label>
                                <textarea class="form-control" id="display_name" rows="3" name="rol_display_name">{{ old('rol_display_name', $roleCheckd->rol_display_name) }}</textarea>
                                @error('rol_display_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Roles -->
                            <div class="form-group">
                                <div class="card border-dark col-md-12">
                                    <div class="card-header">
                                        <h6 class="card-header text">
                                            <input class="form-check-input check_all" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Check ALL
                                            </label>
                                        </h6>
                                    </div>
                                </div>
                                @foreach($PermissonsParent as $itemParent)
                                <div class="card border-dark col-md-12">
                                    <div class="card-header">
                                        <h5 class="card-header text">
                                            <input class="form-check-input checkbox_wrapper" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Module {{ $itemParent->per_name }}
                                            </label>
                                        </h5>
                                    </div>
                                    <div class="row text-center col-md-12">
                                        @foreach($itemParent->PermissionChildent as $itemChildent)
                                        <div class="card-body col-md-3">
                                            <h4 class="card-title">
                                                <div class="form-check">
                                                    <input class="form-check-input checkbox_childent" type="checkbox" name="permission_id[]" value="{{ $itemChildent->per_id }}" @if(in_array($itemChildent->per_id, $roleCheckd->permission->pluck('per_id')->toArray())) checked @endif>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        {{ $itemChildent->per_name }}
                                                    </label>
                                                </div>
                                            </h4>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection