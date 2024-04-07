<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ITP BLUE | ORDER</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE-2.4.18/dist/css/AdminLTE.min.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
    <div class="wrapper">
        <section class="invoice">
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
        </section>
    </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>

</html>