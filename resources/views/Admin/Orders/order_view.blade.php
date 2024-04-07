@extends('Components.admin.admin')
@section('title')
<title>Order View</title>
@endsection
@section('Js')
<script src="{{asset('admins\adminJs.js')}}"></script>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content">
        <section class="invoice">
            <div class="col-xs-12">
                <a href="{{route('admin-orders', ['action'=>$action])}}" class="btn btn-link"><i class="fa fa-chevron-left" ria-hidden="true"></i> Back</a>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <img src="{{asset('img/logo.png')}}" width="100">
                        <small class="pull-right" style="margin-top: 10px;">{{$order->created_at}}</small>
                    </h2>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>ITP BLUE</strong><br>
                        475A Đ. Điện Biên Phủ, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam
                        Phone: 19008198<br>
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong>{{$order->ord_user_name}}</strong><br>
                        {{$order->ord_address}}<br>
                        Phone: {{$order->ord_phone_no}}<br>
                        Email: {{$order->ord_email}}<br>
                    </address>
                </div>
                <div class="col-sm-4 invoice-col">
                    <b>Invoice #007612</b><br>
                    <br>
                    <b>Order ID:</b> {{$order->ord_id}}<br>
                    <b>Status:</b> {{$order->ord_status}}<br>
                    <b>Payment:</b> {{$order->ord_payment}}<br>
                    <b>Payment Status:</b> {{$order->ord_pay_status}}<br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imgae</th>
                                <th>Prduct Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_detail as $orderDetail)
                            @php
                            $totalAll = 0;
                            $productItem = $orderDetail->products;
                            $totalAll += ($orderDetail->ordd_quantity * $orderDetail->ordd_product_price);
                            @endphp
                            <tr>
                                <td>{{$productItem->pro_id}}</td>
                                <td>
                                    <img src="data:image/jpeg;base64,{{ base64_encode($productItem->pro_img)}}" width="90">
                                </td>
                                <td>{{$orderDetail->ordd_product_name}}</td>
                                <td>{{$orderDetail->ordd_product_price}}$</td>
                                <td>{{$orderDetail->ordd_quantity}}</td>
                                <td>{{$totalAll}}$</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <p class="lead">Amount Due 2/22/2014</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>{{$order->ord_total_original}}$</td>
                            </tr>
                            <tr>
                                <th>Promotion</th>
                                <td>{{$order->ord_promotion}}$</td>
                            </tr>
                            <tr>
                                <th>Shipping:</th>
                                <td>{{$order->ord_ship}}$</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>{{$order->ord_total}}$</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="{{ route('admin-orders-print', ['id'=>$order->ord_id]) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    @if($order->ord_status == 'Wait for approval' )
                        <a href="{{ route('admin-orders-update', ['id'=>$order->ord_id, 'action'=>$action, 'status' => 'Confirm']) }}" type="button" class="btn btn-success pull-right change-status">
                            Confirm
                        </a>
                       <a href="{{ route('admin-orders-update', ['id'=>$order->ord_id, 'action'=>$action, 'status' => 'Cancelled']) }}" type="button" class="btn btn-danger pull-right change-status" style="margin-right: 5px;">
                            Cancel order
                        </a>
                    @endif
                    @if($order->ord_status == 'Confirm' )
                       <a href="{{ route('admin-orders-update', ['id'=>$order->ord_id, 'action'=>$action, 'status' => 'Delivering']) }}" type="button" class="btn btn-success pull-right change-status">
                            Delivery order
                        </a>
                       <a href="{{ route('admin-orders-update', ['id'=>$order->ord_id, 'action'=>$action, 'status' => 'Cancelled']) }}" type="button" class="btn btn-danger pull-right change-status" style="margin-right: 5px;">
                            Cancel order
                        </a>
                    @endif
                    @if($order->ord_status == 'Delivering' )
                       <a href="{{ route('admin-orders-update', ['id'=>$order->ord_id, 'action'=>$action, 'status' => 'Delivered']) }}" type="button" class="btn btn-success pull-right change-status">
                            Order delivered successfully
                        </a>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection