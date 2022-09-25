@extends('layouts.master')

@section('content')
@if ($message = Session::get('donation'))
<script>
    swal("Thank you", "Your Product Is Pending Until Approval.", "success");
</script>
@endif


<script>
var uploadField = document.getElementById("image");
//set it up for roughly 2MB
uploadField.onchange = function() {
    if(this.files[0].size > 2200000){
       alert("File is too big!");
       this.value = "";
    };
};
</script>
    <div class="block-31" style="position: relative;">
        <div class="loop-block-31 ">
            <div class="block-30 block-30-sm item" style="background-image: url({{ url('images/Olive.jpg') }});"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-7">
                            {{-- <h4 class="heading mb-5">WANT TO MAKE MONEY?</h4> --}}
                            <h3 class="heading mb-5">BUY . CHAT . SELL</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container contact">
        <div class="row">
            {{-- <div class="col-md-3"> --}}
                <div class="contact-info" >
                    {{-- <img src= "/images/olive_hand.jpg" width="250" height="600" alt="image" /> --}}
                    {{-- <h2>بدك فلوس ؟?</h2>
                    <br>
                    <h5>لا تتردد وابدأ الان</h5> --}}
<br> <br> <br><br>

                </div>
            {{-- </div> --}}



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="col-md-9" style="background-color: #c9c9c93d; margin-left: 168px;">
                <div class="contact-form">
                    <form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">Full Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fname" name="doner_name"
                                    placeholder="Enter First Name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-3" for="lname">Phone Number:</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ old('phoneNumber') }}" id="form3Examplev5" class="form-control form-control-lg @error('phonenumber') is-invalid @enderror"
                         name="phonenumber" required autocomplete="phonenumber" autofocus />

                            </div>
                        </div>

                        <div class="row">



                               <div class="form-group col-md-4">
                            <label class="control-label col-sm-6" for="">Category</label>
                            <div class="col-sm-10">
                                <select id="" class="form-control" name="category_id">
                                    @foreach ($category as $item)
                                        <option class="dropdown-item" value="{{ $item->id }}">{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                            <div class="form-group col-md-2" style="margin-left: -50px">
                                <label  class="control-label col-sm-3" for="" style="margin-left: -13px">City</label>
                                <select id="" class="form-control" name="city_id">
                                    @foreach ($city as $item)
                                        <option class="dropdown-item" value="{{ $item->id }}">{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>




                        </div>

                            <div class="form-group">
                                <b> <label class="control-label col-sm-12" for="">Product name</label> </b>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control py-2" name="title"
                                        placeholder="Enter your product name">
                                </div>
                            </div>

                            <div class="form-group">
                                <b> <label class="control-label col-sm-12" for="pack_img">Product image</label> </b>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control py-2" name="image"
                                        placeholder="Upload an image for the product">
                                </div>
                            </div>


                            <div class="form-group">
                                <b> <label class="control-label col-sm-12" for="num_content">Number of items</label> </b>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control py-2" name="products_number"
                                        placeholder="Number of package content">
                                </div>
                            </div>



                            <div class="form-group">
                                <!-- <label for="v_message">Email</label> -->
                                <div class="col-sm-10">
                                    <textarea name="description" id="" cols="30" rows="3" class="form-control py-2"
                                        placeholder="Description of the package"></textarea>
                                    <!-- <input type="text" class="form-control py-2" id="email"> -->
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>



                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
