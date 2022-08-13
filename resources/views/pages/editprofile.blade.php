@extends('layouts.master')

@section('content')
<style>


.ftco-navbar-light {
    background: #343a40 !important;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
    top: 0px  !important;


}


</style>

<div class="container" style="padding:8%;margin-top:100px">
    <form action="{{ route('pages.updateProfile', $user->id)}}" method="POST" enctype="multipart/form-data">
        {{-- @method('PUT') --}}
        @csrf
    <div class="form-group ">
      <label for="exampleFormControlInput1"> Name:</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control" required >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Email:</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control" required >
    </div>


    <div class="form-group ">


    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Phone Number:</label>
      <input type="number" name="phonenumber" value="{{ $user->phonenumber }}" class="form-control" required >
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Profile Photo</label>
        <input type='file' name="logo" class="form-control-file" >
      </div>
    <div class="form-group">

        <input type='hidden' name="hiddenlogo" value="{{$user->logo}}" class="form-control-file" >
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <a  href="{{url('pages.profile')}}" class="btn btn-primary">Back</a> --}}
      </div>
  </form>
</div>
<br><br><br>


@endsection
