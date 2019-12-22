@extends('layouts.app')
@section('tourlayout')

<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="/">Home</a>
						<a href="/login">Log In</a>
					</div>
					<h2>Log In</h2>
				</div>
			</div>
		</div>
	</section>

<section class="contact_area section_gap">
    <div class="container">

            {{-- {!! Form::open(array('url' => 'login')) !!}  --}}

            <div class="col-lg-9">

                <form class="row contact_form" action="/login" method="POST" id="contactForm" novalidate="novalidate">

                    {{ csrf_field() }}


                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="subject" name="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-md-3 text-right">
                        <button type="submit"  class="primary-btn text-uppercase">Submit</button>
                    </div>
                </form>
            </div>

            {{-- {!! Form::close() !!}  --}}

        </div>
    </div>
</section>



@endsection