
@extends('layouts.master')

@section('content')

  <div class="block-31" style="position: relative;">
    <div class=" loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/land.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">CONTACT US</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data" required>
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control px-3 py-3" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="text"  name="email"class="form-control px-3 py-3" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text"  name="subject"class="form-control px-3 py-3" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>




          @if(session()->has('message'))
          <div class="alert alert-success ">
              {{ session()->get('message') }}
          </div>
        @endif


        </div>

        <div class="col-md-6">
            <img src="images/Map.png" alt="" width="550px" height="450px">

        </div>
      </div>
    </div>
  </div>




@endsection
