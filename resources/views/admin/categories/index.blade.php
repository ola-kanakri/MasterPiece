@extends('layouts.admin')

@section('content')

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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($data as $value)
                      <tr>
                        <td>{{$value->name}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$value->desc}}</strong></td>
                        {{-- <td><span class="badge bg-label-{{$user->roles == 0 ? 'primary': 'danger'}} me-1">{{$user->roles == 0 ? 'user': 'admin'}}</span></td> --}}
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                              <img src="{{ url('Image/'.$value->image) }}" alt="Avatar" width="100px" height="100px" />

                          </ul>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('categories.edit', $value->id)}}">
                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <form action="{{ route('categories.destroy' , $value->id)}}" method="POST" class="d-inline">
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
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>

              {{-- pagination --}}
              {{-- <div class="pagination-wrapper">
                {{ $users->links('pagination::bootstrap-4')}}
              </div> --}}

              <!--/ Hoverable Table rows -->
@endsection
