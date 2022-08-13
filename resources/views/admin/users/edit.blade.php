@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('users.update' , $user->id)}}"  method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        {{-- name  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-user"></i
          ></span>
          <input
            type="text"
            class="form-control"
            id="basic-icon-default-fullname"
            placeholder="John Doe"
            aria-label="John Doe"
            aria-describedby="basic-icon-default-fullname2"
            name="name"
            value="{{ old('name') ?? $user->name}}"
          />
        </div>
      </div>
      {{-- <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">city</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class="bx bx-buildings"></i
          ></span>
          <input
            type="text"
            id="basic-icon-default-company"
            class="form-control"
            placeholder="ACME Inc."
            aria-label="ACME Inc."
            aria-describedby="basic-icon-default-company2"
            name="city"
            value="{{ old('name') ?? $user->city}}"
          />
        </div> --}}


        {{-- city --}}
        <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">city</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class="bx bx-buildings"></i
          ></span>
        <select name="city_id" id="city" >
          @foreach ($cities as $city)
            <option value="{{$city->id}}" {{$user->city_id == $city->id ? 'selected' : ''}}  >{{$city->name}}</option>
          @endforeach
        </select>
        </div>
      </div>

        {{-- roles --}}
        <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">Role</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class='bx bx-id-card'></i></span>
        <select name="roles" id="roles" >
          <option value="0" {{$user->roles == 0 ? 'selected' : ''}}  >User</option>
            <option value="1" {{$user->roles == 1 ? 'selected' : ''}} >Admin</option>
        </select>
        </div>
      </div>

      {{-- email --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-email">Email</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
          <input
            type="text"
            id="basic-icon-default-email"
            class="form-control"
            placeholder="john.doe"
            aria-label="john.doe"
            aria-describedby="basic-icon-default-email2"
            name="email"
            value="{{ old('email') ?? $user->email}}"
          />
          <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
        </div>
        <div class="form-text">You can use letters, numbers & periods</div>
      </div>

      {{-- phonenumber --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-phone">Phone No</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-phone2" class="input-group-text"
            ><i class="bx bx-phone"></i
          ></span>
          <input
            type="text"
            id="basic-icon-default-phone"
            class="form-control phone-mask"
            placeholder="658 799 8941"
            aria-label="658 799 8941"
            aria-describedby="basic-icon-default-phone2"
            name="phonenumber"
            value="{{ old('phonenumber') ?? $user->phonenumber}}"
          />
        </div>
      </div>

      {{-- image  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-image">Image</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-image" class="input-group-text"
            ><i class="bx bx-image"></i
          ></span>
          <input
            type="file"
            id="basic-icon-default-image"
            class="form-control phone-mask"
            aria-describedby="basic-icon-default-image"
            name="image"
            value="{{ old('image') ?? $user->image}}"
          />
        </div>
      </div>


      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection