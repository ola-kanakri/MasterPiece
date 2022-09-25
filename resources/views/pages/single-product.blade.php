
@extends('layouts.master')

@section('content')
<style>
    .ftco-navbar-light {
    background: #fff !important;
    position: inherit;
    color: #000 !important;
    /* left: 0; */
    /* right: 0; */
    z-index: 3;
    top: 0;
}
.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    color: #000;
    opacity: 1 !important;
    }
    .navbar-dark .navbar-nav .nav-link {
    color: #000 !important;

}

.navbar-dark .navbar-brand {
    color: #000 !important;
}
.navbar-dark .navbar-toggler {
    color: #000 !important;
    color: #000 !important;
}
</style>
{{-- <ul>
    <li>{{ $package->name }}</li>
    <li>{{ $package->description }}</li>
    @auth
        <li>{{ $package->title }}</li>
    @endauth


</ul> --}}

{{-- <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading">Donations</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div> --}}

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                	<div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            <img src="{{ url('Image/'.$package->image) }}" id="main_product_image" width="350">
                        </div>	<div class="thumbnail_images">
                            <ul id="thumbnail">
                                {{-- <li><img onclick="changeImage(this)" src="https://i.imgur.com/TAzli1U.jpg" width="70"></li> --}}
                                	{{-- <li><img onclick="changeImage(this)" src="https://i.imgur.com/w6kEctd.jpg" width="70"></li> --}}
                                    {{-- <li><img onclick="changeImage(this)" src="https://i.imgur.com/L7hFD8X.jpg" width="70"></li> --}}
                                    {{-- <li><img onclick="changeImage(this)" src="https://i.imgur.com/6ZufmNS.jpg" width="70"></li> --}}
                                </ul>
                            	</div>
                            	</div>
                            	</div>
                                <div class="col-md-6">
                                    <div class="p-3 right-side">
                                        	<div class="d-flex justify-content-between align-items-center">
                                                	<h2>{{ $package->title }}</h2>
                                                    	{{-- <span class="heart"><i class='bx bx-heart'></i></span> --}}

                                                	</div>



                                                    	<div class="mt-2 pr-3 ">
                                                        <p>{{ $package->description }}</p>
                                                    	</div>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h4>product Status</h4>
                                                         </div>



                                                    	<div class="mt-2 pr-3 ">
                                                            <p>{{ $package->condition }}</p>
                                                            </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h4>Product Numbers</h4>
                                                         </div>



                                                    	<div class="mt-2 pr-3 ">
                                                            <p>{{ $package->products_number }}</p>
                                                            </div>

                                                        <h4>Seller Info</h4>
                                                        <div class="mt-2 pr-6 ">
                                                            <P class='h5'>{{ $package->doner_name }}</P>
                                                            <P class='h5'>{{ $package->phone_number }}</P>
                                                            </div>


                                                            <form action="{{ route('orders.store') }}" method="POST">
                                                                {{-- @method("POST") --}}
                                                                @csrf
                                                                <input type="hidden" name="package_id" value="{{ $package->id }}"/>
                                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"/>
                                                                {{-- <input type="hidden" name="user_id" value="{{ 1 }}"/> --}}
                                                                <input type="hidden" name="status" value="{{ 1 }}"/>
                                                                <div class="buttons d-flex flex-row mt-5 gap-3">
                                                                                     	{{-- <button type="submit" class="btn btn-outline-dark" style="background-color:#f7ca44;color:#656262">RESERVE IT</button> --}}
                                                                          </div>
                                                            </form>


                                                                        	</div>
                                                                                </div>

                                                                                </div>
                                                                           </div>

                                                                            </div>


@endsection
