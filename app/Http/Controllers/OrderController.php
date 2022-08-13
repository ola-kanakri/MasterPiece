<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders_doners = Order::orderBy('id', 'ASC')->join('users', 'orders.user_id', '=', 'users.id')
        ->paginate(10,['orders.id', 'users.name']);
        $orders_package = Order::orderBy('id', 'ASC')->join('packages', 'orders.package_id', '=', 'packages.id')
        ->paginate(10,['orders.id','packages.title']);
        // dd($orders_doners);
        $orders = Order::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);

        // dd($orders_package);
        // dd($user_city);
        return view('admin.orders.index',compact('orders_package', 'orders_doners' ,'orders' ));
    }


    public function orderItems($id)
    {
        $items = Order::where('user_id' , $id)->paginate(10);
        $orders_package = Order::where('user_id' , $id)->join('packages', 'orders.package_id', '=', 'packages.id')
        ->get(['orders.id', 'packages.title' , 'packages.image' , 'packages.description' , 'packages.condition']);
        return view('admin.orders.items',compact('items' , 'orders_package'));
    }

    public function orders($id)
    {
        $orders_doners = Order::orderBy('id', 'ASC')->join('users', 'orders.user_id', '=', 'users.id')
        ->paginate(10,['orders.id', 'users.name']);
        $orders_package = Order::orderBy('id', 'ASC')->join('packages', 'orders.package_id', '=', 'packages.id')
        ->paginate(10,['orders.id','packages.title']);
        // dd($orders_doners);
        $orders = Order::where('user_id' , $id)->filter(request(['search']))->oldest()->paginate(10);
        // dd($orders);
        // dd($orders_package);
        // dd($user_city);
        return view('pages.orders',compact('orders_package', 'orders_doners' ,'orders' ));
    }

    public function profileItems($id)
    {
        $items = Order::where('user_id' , $id)->paginate(10);
        $orders_package = Order::where('user_id' , $id)->join('packages', 'orders.package_id', '=', 'packages.id')
        ->get(['orders.id', 'packages.title' , 'packages.image' , 'packages.description' , 'packages.condition']);
        return view('pages.order-items',compact('items' , 'orders_package'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order = new Order();
        $order->package_id = $request->package_id;
        $order->user_id = $request->user_id;
        $order->status = $request->status;
        $order->save();
        // Package::softDelete($order->id)
        return redirect()->route('packages.softDelete',$request->package_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
        ->with('message', 'Order deleted successfully');
    }

    public function approve($id)
    {
        $Order = new Order;
        $Order->where('id', $id)->update(['status' => 1]);
        return redirect()->route('orders.index')
        ->with('message', 'Order has been approved successfully');
    }
}
