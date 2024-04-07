<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class OrdersController extends Controller
{

    private $orders;
    protected $emailService;
    public function __construct(Orders $orders, EmailService $emailService)
    {
        $this->orders = $orders;
        $this->emailService = $emailService;
    }
    public function index(Request $request, $action)
    {
        try {
            if ($request->search != null) {
                $orders_wait = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Wait for approval')->where('ord_id', $request->search)->latest('updated_at')->paginate(15);
            } else {
                $orders_wait = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Wait for approval')->latest('updated_at')->paginate(20);
            }
            if ($request->search != null) {
                $orders_confirm = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Confirm')->where('ord_id', $request->search)->latest('updated_at')->paginate(15);
            } else {
                $orders_confirm = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Confirm')->latest('updated_at')->paginate(20);
            }
            if ($request->search != null) {
                $orders_deing = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Delivering')->where('ord_id', $request->search)->latest('updated_at')->paginate(15);
            } else {
                $orders_deing = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Delivering')->latest('updated_at')->paginate(20);
            }
            if ($request->search != null) {
                $orders_deed = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Delivered')->where('ord_id', $request->search)->latest('updated_at')->paginate(15);
            } else {
                $orders_deed = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Delivered')->latest('updated_at')->paginate(20);
            }
            if ($request->search != null) {
                $orders_can = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Cancelled')->where('ord_id', $request->search)->latest('updated_at')->paginate(15);
            } else {
                $orders_can = $this->orders::withoutTrashed()->select('ord_id', 'ord_user_name', 'ord_total', 'ord_status')->where('ord_status', 'Cancelled')->latest('updated_at')->paginate(20);
            }
            $activeAction = '';
            switch ($action) {
                case 'wait_for_approval':
                    $activeAction = 'wait_for_approval';
                    break;
                case 'confirm':
                    $activeAction = 'confirm';
                    break;
                case 'delivering':
                    $activeAction = 'delivering';
                    break;
                case 'delivered':
                    $activeAction = 'delivered';
                    break;
                case 'cancelled':
                    $activeAction = 'cancelled';
                    break;
                default:
                    abort(404);
            }
            return view('Admin.Orders.orders', compact('orders_wait', 'orders_confirm', 'orders_deing', 'orders_deed', 'orders_can', 'activeAction'));
        } catch (\Throwable $exception) {
            $orders_wait = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            $orders_confirm = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            $orders_deing = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            $orders_deed = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            $orders_can = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Admin.Orders.orders', compact('orders_wait', 'orders_deing', 'orders_deed', 'orders_can'));
        }
    }

    public function edit($action,$id)
    {
        $order = $this->orders::find($id);
        return view('Admin.Orders.order_view', compact('order','action'));
    }

    public function print($id)
    {
        $order = $this->orders::find($id);
        return view('Admin.Orders.order_print', compact('order'));
    }

    public function update(Request $request, $action, $id, $status)
    {
        try {
            DB::beginTransaction();
            $page = $request->page;
            $order = $this->orders->find($id);
            Log::info($id);
            Log::info($order);
            if (!$order) {
                Alert::error('Update Error', 'Order Updated Error');
                return redirect()->route('admin-orders', ['page' => $page]);
            }
            $order->update([
                'ord_status' => $status
            ]);
          
            if($status == 'Confirm'){
                $check = $this->emailService->sentBill($order);
                Log::info($check);
            }
            DB::commit();
            Alert::success('Update Success', 'Order Updated Successfully');
            return redirect()->route('admin-orders', ['page' => $page, 'action'=>$action]);
        } catch (\Throwable $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Update Error', 'Order Updated Error');
            return redirect()->route('admin-orders', ['page' => $page, 'action'=>$action]);
        }
    }
}
