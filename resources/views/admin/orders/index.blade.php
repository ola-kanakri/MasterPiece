@extends('layouts.admin')

@section('content')
{{-- @php
    echo '<pre>;';
        print_r($users->city);
    echo '<pre>;';
@endphp --}}
            <!-- Hoverable Table rows -->
            @if(session()->has('message'))
            <div class="alert alert-success ">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Order ID</th>
                    <th>Seller name</th>
                    <th>Status</th>
                    <th>Actions/items</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($orders as  $order)
                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order->id}}</strong></td>
                    <td>{{$orders_doners[$i ]->name}}</td>
                    <td><span class="badge bg-label-{{$order->status == 0 ? 'warning' : 'success'}} me-1">{{$order->status == 0 ? 'Pending' : 'Approved'}}</span></td>
                    {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders_package[$i]->title ?? 'none'}}</strong></td> --}}

                    <td>
                        <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/items/{{$order->user_id}}"{{--pass the user id--}}
                            ><i class="bx bx-show me-1"></i> View</a
                            >
                            @if ($order->status == 0)
                                <a class="dropdown-item" href="{{'admin/order/approve/' . $order->id }}"
                                ><i class="bx bx-check me-1"></i> Approve</a
                                >
                            @endif
                        <form action="{{ route('orders.destroy' , $order->id)}}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <span  class="dropdown-item"
                            ><i class="bx bx-trash me-1"></i> <button style="border: none; background-color:transparent;margin:0;padding:0;font-weight: 400;
                            color: #697a8d;">Delete</button></span
                            >
                        </form>
                        </div>
                        </div>
                    </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach

                </tbody>
                </table>
            </div>
            </div>

            {{-- pagination --}}
            <div class="pagination-wrapper">
            {{ $orders->links('pagination::bootstrap-4')}}
            </div>

            <!--/ Hoverable Table rows -->
@endsection
