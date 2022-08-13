<style>


/* Created with https://www.css-gradient.com */

.wrapper {
	 margin: 10vh;
}
 .card {
	 border: none;
	 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
	 overflow: hidden;
	 border-radius: 20px;
	 min-height: 450px;
	 box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.166);
}
 @media (max-width: 768px) {
	 .card {
		 min-height: 350px;
	}
}
 @media (max-width: 420px) {
	 .card {
		 min-height: 300px;
	}
}
 .card.card-has-bg {
	 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
	 background-size: 120%;
	 background-repeat: no-repeat;
	 background-position: center center;
}
 .card.card-has-bg:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 background: inherit;
	 /* -webkit-filter: grayscale(1);
	 -moz-filter: grayscale(100%);
	 -ms-filter: grayscale(100%);
	 -o-filter: grayscale(100%);
	 filter: grayscale(100%); */
}
 .card.card-has-bg .yousef:after {
    content: " (" attr(href) ")";
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
     color: transparent;
	 background: inherit;
	 /* -webkit-filter: grayscale(1);
	 -moz-filter: grayscale(100%);
	 -ms-filter: grayscale(100%);
	 -o-filter: grayscale(100%);
	 filter: grayscale(100%); */
}
 .card.card-has-bg:hover {
	 transform: scale(0.98);
	 /* box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.123); */
	 background-size: 130%;
	 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
 .card.card-has-bg:hover .card-img-overlay {
	 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
	 /* background: #234f6d; */
	 /* background: linear-gradient(0deg, rgba(114, 81, 4, 0.43) 0%, rgba(164, 143, 57, 0.584) 100%); */
}
 .card .card-footer {
	 background: none;
	 border-top: none;
}
 .card .card-footer .media img {
	 border: solid 3px rgba(255, 255, 255, 0.14);
}
 .card .card-meta {
	 color: #26bd75;
}
 .card .card-body {
	 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
 .card:hover {
	 cursor: pointer;
	 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
 .card:hover .card-body {
	 margin-top: 30px;
	 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
 .card .card-img-overlay {
	 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
	 /* background: #234f6d;
	 background: linear-gradient(0deg, rgba(35, 79, 109, 0.197) 0%, rgba(69, 95, 113, 0.685) 100%); */
}


</style>


@extends('layouts.master')



@section('content')


<div class="block-31" style="position: relative;">
    <div class=" loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/olive branch.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h4 class="heading mb-5">WANT TO MAKE MONEY?</h4>
              <h3 class="heading mb-5">BUY . CHAT . SELL</h3>
             

              <p class="mb-0"><a href="/about" class="btn btn-primary px-3 py-2">FIND MORE</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  {{-- <div class="site-section section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pr-5">
          <div class="block-48">
              <span class="block-48-text-1">Served Over</span>
              <div class="block-48-counter ftco-number" data-number="3760">3760</div>
              <span class="block-48-text-1 mb-4 d-block">Familes in 5 Cities</span>
              <p class="mb-0"><a href="#" class="btn btn-white px-3 py-2">View Our Program</a></p>
            </div>
        </div>
        <div class="col-md-6 welcome-text">
          <h2 class="display-4 mb-3">Who Are We?</h2>
          <p class="lead">More than 1,000 donors have trusted GiveHope to direct their donations. Together, they have given over 5000 to the organizations we recommend. These donations will save many families and provide cfurinter for global poor.</p>
          <p class="mb-4">Be The One Who Make The Difference . </p>
          <p class="mb-0"><a href="/about" class="btn btn-primary px-3 py-2">Read More</a></p>
        </div>
      </div>
    </div>
  </div> --}}





        <section class="wrapper">
            <div class="container">
              <div class="row">
                <div class="col text-center mb-5">
                 <br/><h1 style="color: #f7ca44">LATEST ADVERTISEMENT</h1>
            {{--<p class="lead">There is no better exercise for your heart than reaching down and helping to lift someone up.</p> --}}
                </div>
              </div>
            <div class="row">
                @foreach($data as $values)
           <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('{{ ('Image/'.$values->image) }}');">
                   <img class="card-img d-none" src="" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                  <div class="card-img-overlay d-flex flex-column">
                   <div class="card-body">
                      <small class="card-meta mb-2" style="color: white"></small>
                      {{-- <h4 class="card-title mt-0"><a class="text-light yousef" href="{{ route('categories.show', $values->id) }}">{{ $values->name }}</a></h4> --}}
                      <h4 class="card-title mt-0"><a  href="{{ route('categories.show', $values->id) }}">{{ $values->name }}</a></h4>
                     {{-- <small><i class="far fa-clock"></i> September 22, 2022</small> --}}
                    </div>
                    <a href="{{ route('categories.show', $values->id) }}" class="btn btn-primary">View Product</a>
                    <div class="card-footer">
                     <div class="media">

            <div class="media-body text-center">
              <h6 class="my-0 text-white d-block ">{{$values->desc}}</h6>
              {{-- <small >New Categories Will Be Added</small> --}}
            </div>
          </div>
                    </div>
                  </div>
                </div></div>

                @endforeach







          </div>

          </div>
          </section>









  <div class="site-section fund-raisers bg-light">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>OUR SERVICES</h2>
          <p class="lead">Help others without any reason and give without the expectation of receiving anything in return</p>
          <p><a href="#" class="link-underline">Take A Look At Our Trusted Partners!</p>
        </div>
      </div>
    </div> 




     <div class="site-section bg-light">
        <div class="container">


          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="post-entry">
                <a href="blog-single.html" class="mb-3 img-wrap">
                  <img src="images/farmer.jpg" alt="Image placeholder" class="img-fluid">
                </a>
                {{-- <h3><a href="#">Hope Organization</a></h3> --}}
                <span class="date mb-4 d-block text-muted">collaboration Since April 19, 2016</span>

                <p>provided to many families who can</p><p> nolonger afford expenses.</p>
                <p><a href="#" class="link-underline">Located In Irbid</a></p>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="post-entry">
                <a href="blog-single.html" class="mb-3 img-wrap">
                  <img src="images/plant.jpg" alt="Image placeholder" class="img-fluid">
                </a>
                {{-- <h3><a href="#">Bunyan</a></h3> --}}
                <span class="date mb-4 d-block text-muted">collaboration Since May 17, 2021</span>
                <p>publications with the aim of upgrading </p><p>people, their societies and institutions </p>
                <p><a href="#" class="link-underline">Located In Amman</a></p>
              </div>
            </div>


            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="post-entry">
                <a href="blog-single.html" class="mb-3 img-wrap">
                  <img src="images/collap.jpg" alt="Image placeholder" class="img-fluid">
                </a>
                {{-- <h3><a href="#">The Green Crescent Society</a></h3> --}}
                <span class="date mb-4 d-block text-muted"> collaboration Since July 26, 2018</span>
                <p>Relief with a common character with a humanitarian character and Islamic values.</p>
                <p><a href="#" class="link-underline">Located In Zarqa</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div> <!-- .section -->
 


   {{-- <div class="featured-section overlay-color-2" style="background-image: url('images/bg_3.jpg');">

    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="images/bg_3.jpg" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Success Stories</span>
          <h2>The Act of Giving Is Life. We Successfuly Provided 2560 Families With Needed House Supplies.</h2>
          <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <span class="fund-raised d-block mb-5">Want To Be Part Of Our Success Stories? </span>

          <p><a href="/donations/create" class="btn btn-success btn-hover-white py-3 px-5" style=" color:#f7ca44; background-color: rgba(255, 255, 255, 0.952); border:white">Donate Now!</a></p>
        </div>

      </div>
    </div>

  </div> <!-- .featured-donate -->
 --}}


  <!-- .featured-donate -->

   <!-- .site-section -->




@endsection

