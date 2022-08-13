@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('users.store')}}"  method="POST" enctype="multipart/form-data">
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
            
          />
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

        {{-- password  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Password</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-user"></i
          ></span>
          <input
            type="text"
            class="form-control"
            id="basic-icon-default-fullname"
            placeholder="Password"
            aria-label="Password"
            aria-describedby="basic-icon-default-fullname2"
            name="password"
            
          />
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
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
        <select name="city_id" id="city" style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;" >
          <option selected disabled>Select a city</option>
          @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
          @endforeach
        </select>
        @error('city_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

        {{-- roles --}}
        <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">Role</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class='bx bx-id-card'></i></span>
        <select name="roles" id="roles"  style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;">
            <option selected disabled  >Select role</option>
            <option value="0"  >User</option>
            <option value="1" >Admin</option>
        </select>
        @error('roles')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
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
            placeholder="example@example.com"
            aria-label="email"
            aria-describedby="basic-icon-default-email2"
            name="email"
            
          />
          <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
        </div>
        @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
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
            placeholder="07xxxxxxxx"
            aria-label="07xxxxxxxx"
            aria-describedby="basic-icon-default-phone2"
            name="phonenumber"
            
          />
          @error('phonenumber')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
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
          />
          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>


      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection