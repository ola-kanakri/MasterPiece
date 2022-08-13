@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('cities.store')}}"  method="POST" enctype="multipart/form-data">

        @csrf
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">City Name</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-pin"></i
          ></span>
          <input type="text" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="name"

          />
        </div>
      </div>



      <button type="submit" class="btn btn-primary" style="background-color: #f7ca44 ;border:#f7ca44">Add City</button>
    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection
