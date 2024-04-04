<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                            <tr>                              
                                <th>Order #</th>
                                <th>Customer Name</th> <!-- Changed from 'Product purchases' to 'Customer Name' -->
                                <th>Status</th>
                                <th>Total</th>
                                <th>Created</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @if($user->orders != null)
                                @foreach ($user->orders as $order)
                                    <tr class="cell-1">
                                    
                                        <td>#{{ $order->ord_id }}</td>
                                        <td>{{ $order->ord_user_name }}</td> <!-- Accessing the user's name -->
                                        <td>
                                            @if ($order->ord_pay_status == 'Fullfilled')
                                                <span class="badge badge-success">{{ $order->ord_pay_status }}</span>
                                            @elseif($order->ord_pay_status == 'Confirmed')
                                                <span class="badge badge-info">{{ $order->ord_pay_status }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ $order->ord_pay_status }}</span>
                                            @endif
                                        </td>
                                        <td>${{ $order->ord_total }}</td>
                                        <td>{{ $order->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('orders.showDetail', ['id' => $user->id, 'orderId' => $order->ord_id]) }}" class="btn btn-primary">Show Order Details</a>

                                        </td>                      
                                    </tr>
                                @endforeach
                            @else
                                <td><span>Not order</span></td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>