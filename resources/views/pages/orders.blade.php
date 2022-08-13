@extends('layouts.master')

@section('content')
<style>


    .ftco-navbar-light {
        background: #343a40 !important;
        position: absolute;
        left: 0;
        right: 0;
        z-index: 3;
        top: 0px  !important;
    
    
    }
    .wrapper{
        margin: 100px 0 ; 
    }
    
    </style>
{{-- @php
    echo '<pre>;';
        print_r($users->city);
    echo '<pre>;';
@endphp --}}
            <!-- Hoverable Table rows -->
            <section class="wrapper ">
            <div class="card ">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Items</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($orders as  $order)
                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order->id}}</strong></td>
                    <td><span class="badge bg-label-{{$order->status == 0 ? 'warning' : 'success'}} me-1">{{$order->status == 0 ? 'Pending' : 'Approved'}}</span></td>
                    {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders_package[$i]->title ?? 'none'}}</strong></td> --}}
                    <td>
                        <a class="" href="/order/items/{{auth()->user()->id}}"{{--pass the user id--}}
                        ><i class="bx bx-show me-1"></i> View</a
                        >
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
            </section>
            <!--/ Hoverable Table rows -->
@endsection
