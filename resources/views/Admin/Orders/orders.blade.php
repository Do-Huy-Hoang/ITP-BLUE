@extends('Components.admin.admin')
@section('title')
<title>Orders</title>
@endsection
@section('Css')
<link rel="stylesheet" href="{{asset('admins\adminStyless.css')}}">
@endsection
@section('Js')
<script>
    $(document).ready(function() {
        // Listen for tab change event
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var tabName = e.target.hash;
            var tabNameWithoutHash = tabName.substring(1);
            window.history.pushState({}, '', '/admin/orders/' + tabNameWithoutHash);
            var form = document.getElementById('form-search');
            form.action = '/admin/orders/' + tabNameWithoutHash;
        });
    });
    $(function() {
        $('.data-table').DataTable({
            'paging': false,
            'lengthChange': false,
            'searching': false,
            'ordering': false,
            'info': false,
            'autoWidth': false,
            "emptyTable": "No data available in table",
        })
    })
</script>

<script src="{{asset('admins\adminJs.js')}}"></script>

@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Orders
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">orders</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4 ">
                            </div>
                            <div class="col-xs-8 ">
                                <form method="GET" id="form-search">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="search" id="search" placeholder="Search by id">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-fw fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="@if($activeAction == 'wait_for_approval') active @endif"><a href="#wait_for_approval" data-toggle="tab" aria-expanded="true">Wait for approval</a></li>
                                <li class="@if($activeAction == 'confirm') active @endif"><a href="#confirm" data-toggle="tab" aria-expanded="true">Confirm</a></li>
                                <li class="@if($activeAction == 'delivering') active @endif"><a href="#delivering" data-toggle="tab" aria-expanded="false">Delivering</a></li>
                                <li class="@if($activeAction == 'delivered') active @endif"><a href="#delivered" data-toggle="tab" aria-expanded="false">Delivered</a></li>
                                <li class="@if($activeAction == 'cancelled') active @endif"><a href="#cancelled" data-toggle="tab" aria-expanded="false">Cancelled</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane @if($activeAction == 'wait_for_approval') active @endif" id="wait_for_approval">
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders_wait->isEmpty() == false)
                                            @foreach($orders_wait as $item)
                                            <tr>
                                                <td>{{$item->ord_id }}</td>
                                                <td>{{ $item->ord_user_name }}</td>
                                                <td>{{ $item->ord_total }}</td>
                                                <td>{{ $item->ord_status }}</td>
                                                <td>
                                                    @can('orders-edit')
                                                    <a href="{{ route('admin-orders-edit', ['id'=>$item->ord_id,'action'=>'wait_for_approval','page' => $orders_wait->currentPage()]) }}" class="btn btn-success" role="button">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
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
                                    {{ $orders_wait->appends(Request::except('page'))->links()}}
                                </div>
                                <div class="tab-pane @if($activeAction == 'confirm') active @endif" id="confirm">
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders_confirm->isEmpty() == false)
                                            @foreach($orders_confirm as $item)
                                            <tr>
                                                <td>{{$item->ord_id }}</td>
                                                <td>{{ $item->ord_user_name }}</td>
                                                <td>{{ $item->ord_total }}</td>
                                                <td>{{ $item->ord_status }}</td>
                                                <td>
                                                    @can('orders-edit')
                                                    <a href="{{ route('admin-orders-edit', ['id'=>$item->ord_id,'action'=>'confirm','page' => $orders_wait->currentPage()]) }}" class="btn btn-success" role="button">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
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
                                    {{ $orders_confirm->appends(Request::except('page'))->links()}}
                                </div>
                                <div class="tab-pane @if($activeAction == 'delivering') active @endif" id="delivering">
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders_deing->isEmpty() == false)
                                            @foreach($orders_deing as $item)
                                            <tr>
                                                <td>{{$item->ord_id }}</td>
                                                <td>{{ $item->ord_user_name }}</td>
                                                <td>{{ $item->ord_total }}</td>
                                                <td>{{ $item->ord_status }}</td>
                                                <td>
                                                    @can('orders-edit')
                                                    <a href="{{ route('admin-orders-edit', ['id'=>$item->ord_id,'action'=>'delivering','page' => $orders_deing->currentPage()]) }}" class="btn btn-success" role="button">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
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
                                    {{ $orders_deing->appends(Request::except('page'))->links()}}
                                </div>
                                <div class="tab-pane @if($activeAction == 'delivered') active @endif" id="delivered">
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders_deed->isEmpty() == false)
                                            @foreach($orders_deed as $item)
                                            <tr>
                                                <td>{{$item->ord_id }}</td>
                                                <td>{{ $item->ord_user_name }}</td>
                                                <td>{{ $item->ord_total }}</td>
                                                <td>{{ $item->ord_status }}</td>
                                                <td>
                                                    @can('orders-edit')
                                                    <a href="{{ route('admin-orders-edit', ['id'=>$item->ord_id,'action'=>'delivered','page' => $orders_deed->currentPage()]) }}" class="btn btn-success" role="button">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
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
                                    {{ $orders_deed->appends(Request::except('page'))->links()}}
                                </div>
                                <div class="tab-pane @if($activeAction == 'cancelled') active @endif" id="cancelled">
                                    <table class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders_can->isEmpty() == false)
                                            @foreach($orders_can as $item)
                                            <tr>
                                                <td>{{$item->ord_id }}</td>
                                                <td>{{ $item->ord_user_name }}</td>
                                                <td>{{ $item->ord_total }}</td>
                                                <td>{{ $item->ord_status }}</td>
                                                <td>
                                                    @can('orders-edit')
                                                    <a href="{{ route('admin-orders-edit', ['id'=>$item->ord_id,'action'=>'cancelled','page' => $orders_can->currentPage()]) }}" class="btn btn-success" role="button">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
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
                                    {{ $orders_can->appends(Request::except('page'))->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection