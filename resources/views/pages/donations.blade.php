@extends('layouts.master')

@section('content')
    <style>
        .ftco-navbar-light {
            background: transparent !important;
            /* position: fixed; */
            color: #000 !important;
            left: 0;
            right: 0;
            z-index: 3;
            top: 0;
        }

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
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



        .p_filter_widgets a:before {
            content: "";
            height: 10px;
            width: 10px;
            border-radius: 50%;
            border: 1px solid #797979;
            position: absolute;
            left: -7%;
            top: 44%;
            transition: cubic-bezier(0.075, 0.82, 0.165, 1)
        }

        .p_filter_widgets p:hover a:before {
            background-color: #f7ca44 !important;
        }
        .section_gap {
  padding: 120px 50px;
}
@media (max-width: 991px) {
  .section_gap {
    padding: 80px 30px;
  }
}
.latest_product_inner {
  margin-bottom: -35px;
}
.cat_product_area .latest_product_inner {
  padding-top: 30px;
  margin-bottom: -50px;
}
.cat_product_area .latest_product_inner .single-product {
  margin-bottom: 50px;
}


.left_widgets {
            margin-bottom: 30px;
            border: 1px solid #eff2f3;
          }
          .left_widgets:last-child {
            margin-bottom: 0px;
          }

.p_filter_widgets .widgets_inner {
  border-bottom: 1px solid #eeeeee;
}
.p_filter_widgets .widgets_inner:last-child {
  border-bottom: 0px;
}
.p_filter_widgets .list li {
  margin-bottom: 18px;
}
.p_filter_widgets .list li a {
  padding-left: 30px;
  font-size: 14px;
  font-family: "Roboto", sans-serif;
  font-weight: bolder;
  font-size: .75em;
  color: #797979;
  position: relative;
}
.p_filter_widgets .list li a:before {
  content: "";
  height: 10px;
  width: 10px;
  border-radius: 50%;
  border: 1px solid #797979;
  position: absolute;
  left: 0px;
  top: 4px;
  transition: all 300ms linear 0s;
}
.p_filter_widgets .list li a:after {
  content: "";
  height: 4px;
  width: 4px;
  background: #fff;
  border-radius: 50%;
  position: absolute;
  left: 3px;
  top: 8px;
  transition: all 300ms linear 0s;
}
.p_filter_widgets .list li.active a:before,
.p_filter_widgets .list li:hover a:before {
  background: #f7ca44;
  border-color: #f7ca44;
}
.p_filter_widgets .list li:last-child {
  margin-bottom: 0px;
}
.p_filter_widgets .range_item .ui-slider {
  height: 6px;
  border: none;
  background: #e8f0f2;
}
.p_filter_widgets .range_item .ui-slider .ui-slider-range {
  background: #e8f0f2;
}
.p_filter_widgets .range_item .ui-slider .ui-slider-handle {
  height: 16px;
  width: 16px;
  border-radius: 50%;
  border: none;
  background: #71cd14;
  outline: none !important;
  box-shadow: none;
  top: -6px;
  cursor: pointer;
}
.p_filter_widgets .range_item label {
  display: inline-block;
  font-size: 14px;
  font-weight: normal;
  color: #797979;
  font-family: "Roboto", sans-serif;
  margin-top: 15px;
}
.p_filter_widgets .range_item input {
  display: inline-block;
  border: none;
  width: 100px;
  font-size: 14px;
  color: #797979;
  font-family: "Roboto", sans-serif;
  margin-top: 9px;
  padding-left: 3px;
}
.p_filter_widgets .range_item input.placeholder {
  font-size: 14px;
  color: #797979;
  font-family: "Roboto", sans-serif;
}
.p_filter_widgets .range_item input:-moz-placeholder {
  font-size: 14px;
  color: #797979;
  font-family: "Roboto", sans-serif;
}
.p_filter_widgets .range_item input::-moz-placeholder {
  font-size: 14px;
  color: #797979;
  font-family: "Roboto", sans-serif;
}
.p_filter_widgets .range_item input::-webkit-input-placeholder {
  font-size: 14px;
  color: #797979;
  font-family: "Roboto", sans-serif;
}

.l_w_title {
  padding-left: 30px;
  padding-right: 30px;
}
.l_w_title h3 {
  margin-bottom: 20px;
  margin-top: 20px;
  /* font-size: 18px; */
  color: #2a2a2a;
  font-weight: 500;
  line-height: 40px;
  position: relative;
}
.l_w_title h3::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 0px;
  width: 100%;
  height: 1px;
  background: #f7ca44;
}

.widgets_inner {
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 0px;
  padding-bottom: 15px;
}

.list {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

    </style>





    {{-- <div class="container p-5 m-5" > --}}
    {{-- <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url({{ url('images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading">Donations</h2>
            </div>
          </div>
        </div>
      </div>

    </div> --}}
    {{-- </div> --}}



    {{-- 2 --}}



    <div class="row justify-content-center " style="margin-top:130px; background:#f6f6f6">
        @if ($message = Session::get('success'))
            {{-- <div class="alert alert-success text-center fw-bolder" role="alert"> --}}
            <script>
                swal("Package Booked successfully.", " ", "success");
            </script>
            {{-- {{ alert($message) }} --}}
            {{-- </div> --}}
        @endif
        <div class="container-fluid px-5">
            <div class="header p-4" style="">


                {{-- <h2>Donations / {{ $category->name }}</h2> --}}
                <h2>CATEGORY / {{ $category->name }}</h2>
                @auth
                    <p class="h5" style="color:#f7ca44">Located In {{ auth()->user()->city->name }}</p>
                @endauth
            </div>
        </div>
    </div>

    <section class="cat_product_area section_gap ">
            <div class="container-fluid">
                <div class="row flex-row-reverse">




        {{-- <div class="container my-5 ">
            <div class="row flex-row"> --}}
                <div class="col-lg-9 mt-3">
                    <div class="latest_product_inner">
                    <div class="row">
                        @foreach ($packages as $package)
                            <div class="col-lg-3 col-md-6  mb-3">

                                <div class="card">


                                    <img src="{{ url('Image/' . $package->image) }}" class="card-img-top " width="400"
                                        height="250" alt="">



                                </div>
                                {{-- <div class="card-body"> --}}

                                <div class="card-body bg-light text-center">
                                    <div class="mb-2">
                                        <h6 class="font-weight-semibold mb-2" class="text-default mb-2" data-abc="true"
                                            style="font-size:20px">
                                            {{ $package->title }}
                                        </h6>

                                        {{-- <p  class="text-muted" data-abc="true">{{ $package->description }}</p> --}}
                                        {{-- <p  class="text-muted" data-abc="true">{{ $package->products_number }}</p> --}}
                                        <p class="text-muted" data-abc="true">{{ $package->condition }} condition</p>
                                    </div>






                                    @auth
                                        @if (auth()->user()->status == 1)
                                            <a href="{{ route('packages.show', $package->id) }}" class="btn bg-cart"
                                                style="color: #656262"><i class="fa fa-cart-plus mr-2"></i> Show Item</a>
                                        @endif
                                    @endauth


                                </div>
                                {{-- </div> --}}




                            </div>
                        @endforeach
                    </div>
                </div>
                </div>
            {{-- </div>
        </div> --}}





        <div class="col-lg-3 mt-5">
            <div class="left_sidebar_area">
                <aside class="left_widgets p_filter_widgets">
                    <div class="l_w_title">
                        <h3>Browse Categories</h3>
                        {{-- <hr style=" width: 80%; background-color: #f7ca44; margin-left: -2px" /> --}}
                    </div>
                    <div class="widgets_inner">
                        <ul class="list">
                            @foreach ($categories as $category)
                                <li class="h4 p_filter_widgets" style="position: relative;">
                                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                                    <hr style=" width: 80%; margin-left: -10px" />
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </aside>
            </div>
        </div>


                </div>
    </div>
    </section>










    <div class="container d-flex justify-content-center">
        <nav aria-label="Page navigation example" class="mx-auto my-5">
            {{ $packages->links() }}
        </nav>
    </div>



    {{-- 2 --}}
@endsection
