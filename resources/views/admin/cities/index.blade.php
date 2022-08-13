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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($data as $value)
                      <tr>
                        <td>{{$value->id}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$value->name}}</strong></td>
                        {{-- <td><span class="badge bg-label-{{$user->roles == 0 ? 'primary': 'danger'}} me-1">{{$user->roles == 0 ? 'user': 'admin'}}</span></td> --}}

                        <td>



                              <form action="{{ route('cities.destroy' , $value->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                        <i class="bx bx-trash me-1"></i>
                        <button style="border: none; background-color:transparent;margin:0;padding:0;font-weight: 400;color: #697a8d;">Delete</button>

                            </form>


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
