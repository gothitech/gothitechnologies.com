@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/p1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/p2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Propertly</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>It is a mobile app designed to buy/sell apartments. It allows the user to thoroughly view and select an apartment based on their own criteria. The elaborate filtering system simplifies and accelerates the process of making a selection.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>5 months</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>We had to make it possible for the admin to add and manage objects, as well as search objects based on a number of criteria. We also had to implement a function that allows a potential buyer to send a request through the mobile app.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>User can choose the main apartment selection criteria, such as the search radius (within a certain area), price range, types of buildings, key location points, and more.</p>
<p>The user can view available apartments in Google Maps and display other neighboring objects, find the price for available objects (in addition to other features), view the selected apartment plan, and discover details about its floor space.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Xamarin Forms                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									iOS, Android                                </div>
                            </div>
                                                        <div class="shortcode-contact">
                                <div>Want to start a project? It’s simple. Contact us to discuss the details and we’ll tell you how we can help you.</div>
                                <a href="{{route('contact.us')}}" class="sc-link" target="" rel="">Contact us</a>                            </div>
                                                    </div>
						                    </div>
				            </div>
        </div>
    </div>
@endsection