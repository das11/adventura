@extends("layouts.app")
@section("tourlayout")

    <!--================Home Banner Area =================-->
	<section class="banner_area ">
            <div class="banner_inner overlay d-flex align-items-center">
                <div class="container">
                    <div class="banner_content">
                        <div class="page_link">
                            <a href="/">Home</a>
                            <a href="/package">Packages</a>
                        </div>
                        <h2>Package Details</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
    
        
    
        <!--================ Start CTA Area =================-->
        <div class="cta-area2 section_gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="cta-img2 img-fluid" src="img/cta-img2.png" alt="">
                    </div>
                    <div class="offset-lg-2 col-lg-5">
                        <h1>{{ $package->packagename }}</h1>
                        <h3 style="color: white">Cost : {{ $package->packagecost }}</h3>

                        <br>

                        <div style="text-align:center">	
                            <button class="click-btn btn text-uppercase">Get a Call Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ End CTA Area =================-->

@endsection