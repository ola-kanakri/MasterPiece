@extends('layouts.app')

@section('content')


<style>
  @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #c9c9c93d;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg') */
}

.bg-indigo {
/* background-color: #4835d4; */
/* background-color: #f7ca44d9; */

}

.pass
{
    margin-top: 105px;
    padding-right: 3rem;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;

}
}
</style>
{{-- style="background-image: url('/public/images/bg_2.jpg')" --}}


<form  method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
  @csrf
<section class="h-100 h-custom gradient-custom-2" >
  <div class="container py-5 h-85" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-9">
        <div class="card card-registration card-registration-2" style="border-radius: 15px; height:650px ">
          <div class="card-body p-0">
            <div class="row g-0">
              {{-- <div class="col-lg-6" style="background-image: url('images/m.png'); --}}
              <div class="col-lg-6"
              border-bottom-left-radius: 15px; border-top-left-radius: 15px; background-size: cover;  >
                <div class="p-5" >
                  <h3 class="fw-normal mb-4" style="color:black;">General Infomation</h3>

                  <div class="row">
                    <div class=" mb-4 pb-2">

                      <div class="form-outline">
                        <label class="form-label" for="form3Examplev2">Name</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Examplev4">Email</label>
                      <input type="email" id="form3Examplev4" class="form-control form-control-lg  @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" />
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>

                  <div class="row">
                    <div class=" mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                        <label class="form-label" for="form3Examplev5">PhoneNumber</label>
                        <input type="text" value="{{ old('phoneNumber') }}" id="form3Examplev5" class="form-control form-control-lg @error('phonenumber') is-invalid @enderror"
                         name="phonenumber" required autocomplete="phonenumber" autofocus />

                      </div>

                    </div>



                    <div class=" mt-4">

                      <label for="city_id" class="col-md-4 col-form-label">City</label>
                        <select class=" form-control form-control-lg" aria-label="Default select example" name="city_id">
                            <option selected>select your city</option>
                            @foreach ($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>

                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo " style="height: 650px">
                <div class="pass">
                  {{-- <h3 class="fw-normal mb-3">Credential Information</h3> --}}

                  <div class="row">
                    <div class=" mb-4 pb-2">

                      {{-- <div class="form-outline form-white mb-4 pb-2">
                        <label for="logo" class=" col-form-label text-md-end">Charity Logo</label>
                        <input class="form-control form-control-lg " type="file" id="logo" name="logo">

                       </div> --}}
{{-- 

                       <div class="form-outline form-white mb-4 pb-2">

                        <label for="image" class=" col-form-label text-md-end">Identification Papers</label>
                        <input class="form-control form-control-lg" type="file" id="image" name="image">

                       </div> --}}


                       <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                          <label class="form-label" for="form3Examplea2">Password</label>
                          <input type="password" id="form3Examplea2" class="form-control form-control-lg @error('password') is-invalid @enderror"
                          name="password" required autocomplete="new-password" />
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                        </div>
                      </div>

                      <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                          <label class="form-label" for="form3Examplea3">Confirm Password</label>
                          <input type="password" id="form3Examplea3" class="form-control form-control-lg"
                           name="password_confirmation" required autocomplete="new-password"/>

                        </div>
                      </div>

                  <button type="submit" class="btn btn-dark btn-lg d-flex justify-content-center"
                    data-mdb-ripple-color="dark">Register</button>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</form>

@endsection
