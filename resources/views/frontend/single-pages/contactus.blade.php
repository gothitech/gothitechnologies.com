@extends('frontend.layouts.master')
@section('content')
<section class="contact-section">
	<div class="container">
	<div class="d-none d-sm-block mb-5 pb-4">
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="55985a8a278ee7f8202ed8f5-text/javascript">
							function initMap() {
								var uluru = {
									lat: -25.363,
									lng: 131.044
								};
								var grayStyles = [{
										featureType: "all",
										stylers: [{
												saturation: -90
											},
											{
												lightness: 50
											}
										]
									},
									{
										elementType: 'labels.text.fill',
										stylers: [{
											color: '#ccdee9'
										}]
									}
								];
								var map = new google.maps.Map(document.getElementById('map'), {
									center: {
										lat: -31.197,
										lng: 150.744
									},
									zoom: 9,
									styles: grayStyles,
									scrollwheel: false
								});
							}
						</script>

	</div>
	<div class="row">
	<div class="col-12">
	<h2 class="contact-title">Get in Touch</h2>
	</div>
	<div class="col-lg-8">
	@if(Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('success')}}</strong>
    @endif
	<form class="form-contact contact_form" action="{{ route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
		@csrf
	<div class="row">
	<div class="col-12">
	<div class="form-group">
	<textarea class="form-control w-100" name="contact_textarea" id="message" cols="30" rows="9" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Message'" placeholder=" Enter Message" data-cf-modified-55985a8a278ee7f8202ed8f5-=""></textarea>
	</div>
	</div>
	<div class="col-sm-6">
	<div class="form-group">
	<input class="form-control valid" name="contact_name" id="name" type="text" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter your name'" placeholder="Enter your name" data-cf-modified-55985a8a278ee7f8202ed8f5-="">
	</div>
	</div>
	<div class="col-sm-6">
	<div class="form-group">
	<input class="form-control valid" name="contact_email" id="email" type="email" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter email address'" placeholder="Email" data-cf-modified-55985a8a278ee7f8202ed8f5-="">
	</div>
	</div>

	<div class="col-sm-6">
		<div class="form-group">
		<input class="form-control valid" name="contact" id="mobile_no" type="text" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Mobile Number'" placeholder="Your Phone Number" data-cf-modified-55985a8a278ee7f8202ed8f5-="">
		</div>
		</div>
	<div class="col-6">
	 <div class="form-group">
	<input class="form-control" name="address" id="subject" type="text" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Subject'" placeholder="Enter Subject" data-cf-modified-55985a8a278ee7f8202ed8f5-="">
	</div>
	</div>
	</div>
	<div class="form-group mt-3">
	<button type="submit" class="button button-contactForm boxed-btn">Send</button>
	</div>
	</form>
	</div>
	<div class="col-lg-3 offset-lg-1">
	<div class="media contact-info">
	<span class="contact-info__icon"><i class="ti-home"></i></span>
	<div class="media-body">
	<h3> Address:</h3>
	<p>{{$contact->address}}</p>
	</div>
	</div>
	<div class="media contact-info">
	<span class="contact-info__icon"><i class="ti-tablet"></i></span>
	<div class="media-body">
	<h3> Mobile: {{$contact->mobile}}</h3>
	<p>Mon to Fri 9am to 6pm</p>
	</div>
	</div>
	<div class="media contact-info">
	<span class="contact-info__icon"><i class="ti-email"></i></span>
	<div class="media-body">
	
	<p>Send us your query anytime!</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
@endsection