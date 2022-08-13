@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('packages.store')}}"  method="POST" enctype="multipart/form-data">
        @csrf

        {{-- name  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Doner name</label>
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
            name="doner_name"
            
          />
          @error('doner_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

        {{-- phone_number  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">phone number</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-phone"></i
          ></span>
          <input
            type="text"
            class="form-control"
            id="basic-icon-default-fullname"
            placeholder="phone number"
            aria-label="phone_number"
            aria-describedby="basic-icon-default-fullname2"
            name="phone_number"
            
          />
          @error('phone_number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      {{-- <div class="mb-3">
        <label class="form-label" for="basic-icon-default-category">city</label>
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
        <select name="city_id" id="city"  style="border-radius: 0 0.375rem 0.375rem 0; border-color:#d9dee3;">
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

       
        {{-- category --}}
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-category">category</label>
          <div class="input-group input-group-merge">
            <span id="basic-icon-default-category" class="input-group-text"
              ><i class="bx bx-category"></i
            ></span>
          <select name="category_id" id="category" style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;">
            <option selected disabled>Select a category</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>

        {{-- condition --}}
        <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">condition</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class='bx bx-id-card'></i></span>
        <select name="condition" id="condition"  style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;" >
            <option selected disabled  >Select the condition</option>
            <option value="Poor"  >Poor</option>
            <option value="Good"  >Good</option>
            <option value="excellent" >excellent</option>
        </select>
        @error('condition')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      {{-- title --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-email">Title</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-title"></i></span>
          <input
            type="text"
            id="basic-icon-default-email"
            class="form-control"
            placeholder="Enter a title"
            aria-label="title"
            aria-describedby="basic-icon-default-email2"
            name="title"
            
          />
        </div>
        @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      {{-- description --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-phone">description</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-phone2" class="input-group-text"
            ><i class="bx bx-description"></i
          ></span>
          <input
            type="text"
            id="basic-icon-default-phone"
            class="form-control phone-mask"
            placeholder="description"
            aria-label="description"
            aria-describedby="basic-icon-default-phone2"
            name="description"
            
          />
          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      {{-- products_number  --}}
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">products number</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-products"></i
          ></span>
          <input
            type="text"
            class="form-control"
            id="basic-icon-default-fullname"
            placeholder="products number"
            aria-label="products_number"
            aria-describedby="basic-icon-default-fullname2"
            name="products_number"
            
          />
          @error('products_number')
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