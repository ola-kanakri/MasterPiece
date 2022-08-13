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
                <a href="admin/packages/approve-all"><div class="btn btn-success mb-3 approve">Approve All Packages</div></a>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Seller Name</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>Condition</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    @php
                        $i = 1;
                    @endphp
                    <tbody class="table-border-bottom-0">
                      @foreach ($donations as  $donation)
                      <tr>
                        <td>{{$donation->doner_name}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{substr($donation->title , 0 , 40)}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$donation_city[$donation->id - 1]->name ?? 'none'}}</strong></td>
                        <td><span class="badge bg-label-{{$donation->status == 0 ? 'warning': 'success'}} me-1">{{$donation->status == 0 ? 'Pending': 'Approved'}}</span></td>
                        <td><span class="badge bg-label-success me-1">{{$donation->condition}}</span></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="{{$donation->id}}"
                            >
                              <img src="/storage/{{$donation->image}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('packages.edit' , $donation->id)}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              @if ($donation->status == 0)
                                <a class="dropdown-item" href="{{'admin/package/approve/' . $donation->id }}"
                                  ><i class="bx bx-check me-1"></i> Approve</a
                                >
                              @endif
                              <form action="{{ route('packages.destroy' , $donation->id)}}" method="POST" class="d-inline">
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
                {{ $donations->links('pagination::bootstrap-4')}}
              </div>

              <!--/ Hoverable Table rows -->
@endsection