@extends('layouts.admin')

@section('content')
              <!-- Hoverable Table rows -->
              @if(session()->has('message'))
                <div class="alert alert-success ">
                    {{ session()->get('message') }}
                </div>
              @endif
              <div class="card">
                <a href="users/approve-all"><div class="btn btn-success mb-3 approve">Approve All Users</div></a>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    @php
                        $i = 1;
                    @endphp
                    <tbody class="table-border-bottom-0">
                      @foreach ($users as  $user)
                      <tr>
                        <td>{{$user->name}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->email}}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user_city[$user->id - 1]->name ?? 'none'}}</strong></td>
                        <td><span class="badge bg-label-{{$user->roles == 0 ? 'success': 'danger'}} me-1">{{$user->roles == 0 ? 'user': 'admin'}}</span></td>
                        <td><span class="badge bg-label-{{$user->status == 0 ? 'warning': 'success'}} me-1">{{$user->status == 0 ? 'Pending': 'Approved'}}</span></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="{{$user->id}}"
                            >
                              <img src="/storage/{{$user->image}}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('users.edit' , $user->id)}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              @if ($user->status == 0)
                              <a class="dropdown-item" href="{{'user/approve/' . $user->id}}"
                                ><i class="bx bx-check me-1"></i> Approve User</a
                              >
                              @endif
                              <form action="{{ route('users.destroy' , $user->id)}}" method="POST" class="d-inline">
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
                {{ $users->links('pagination::bootstrap-4')}}
              </div>

              <!--/ Hoverable Table rows -->
@endsection
