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


</style>
{{-- @php
    echo '<pre>;';
        print_r($users->city);
    echo '<pre>;';
@endphp --}}
            <!-- Hoverable Table rows -->
            <section class="wrapper my-5">
            <h1>Order </h1>
            <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Condition</th>
                        <th>Image</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody class="table-border-bottom-0">
                    @foreach ($items as  $item)
                    <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders_package[$i]->title}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{substr($orders_package[$i]->description,0,50)}}</strong></td>
                    <td><span class="badge bg-label-{{$orders_package[$i]->condition == 'Poor' ? 'warning' : 'success'}} me-1">{{$orders_package[$i]->condition}}</span></td>
                    <td><img src="/image/{{$orders_package[$i]->image}}" alt="Avatar" class="" width="100" height="100" /></td>
                    {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$items_package[$i]->title ?? 'none'}}</strong></td> --}}
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
