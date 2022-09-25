
 @extends('layouts.master')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> --}}

    @section('content')



    <style>
        body{
    /* background: -webkit-linear-gradient(left, #f3f3f4, #edece7); */
}
.ftco-navbar-light {

    top: 0px !important;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: rgb(255, 255, 255);
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 80%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
    font-size: 30px;
}
.profile-head h6{
    color: #eccb46;
    font-size: 25px;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c5801;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #f6e496;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #f0b206;
}
.size{
    font-size: 20px;
}
    </style>
</head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container-fluid emp-profile">
        {{-- {{dd($user->name)}} --}}
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img style="width: 250px; height: 200px" src="{{url('Image/'.$user->logo) }}" alt=""/>

                                {{-- <div class="file btn btn-lg btn-warning">
                                    Change Photo
                                    <input type="file" name="file"/>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                            Welcome To Your Profile
                                        </h5>
                                        <h6>
                                            {{auth()->user()->name}}
                                        </h6>
                                        {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                                        <br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active size" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">MY INFO</a>
                                        {{-- <a href="/orders/{{auth()->user()->id}}"  class="btn btn-warning">Orders</a> --}}
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <form>
                                @csrf
                                 @method('PUT')
                            {{-- <a href=""  class="profile-edit-btn" >Edit Profile</a> --}}
                            {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> --}}
                            {{-- <a  href="{{route('movie.index')}}" class="btn btn-primary">Back</a> --}}

                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">City</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{$city->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Name</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->name}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Email</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="size">Phone</label>
                                                </div>
                                                <div class="col-md-6 size">
                                                    <p>{{auth()->user()->phonenumber}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p></p>
                                                </div>
                                            </div>
                                </div>
                                {{--  --}}
                </form>
    </div>


            <a href="/editprofile/{{$user->id}}" type="submit" class="btn btn-warning">Edit Profile</a>
        </div>
        </div>
        </div>
{{-- @include('layouts.footer') --}}

@endsection
