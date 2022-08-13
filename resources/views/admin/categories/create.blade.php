@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('categories.store')}}"  method="POST" enctype="multipart/form-data">

        @csrf
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Category Title</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-user"></i
          ></span>
          <input type="text" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="name"

          />
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Category Description</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text">
            <i class="bx bx-comment"></i>
        </span>
          <input type="text" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="desc"

          />
        </div>
      </div>



      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Category Image</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text">
            <i class="bx bx-image"></i>
        </span>
          <input type="file" class="form-control" id="basic-icon-default-fullname"  aria-describedby="basic-icon-default-fullname2"  name="image"

          />
        </div>
      </div>

      <button type="submit" class="btn btn-primary" style="background-color: #f7ca44 ;border:#f7ca44">Add Category</button>
    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection
