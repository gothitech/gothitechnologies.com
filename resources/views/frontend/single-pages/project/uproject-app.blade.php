@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/uproject-1.jpg')}}" width="1300" height="900"
                                                  alt="Uproject mobile camping app"/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">UProject</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>This is an app for camp participants who strive to reduce or increase muscle mass or just to gain weight. It works as a reminder system for athletes who want to exercise every day.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>12 months</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>The app includes a built-in weekly calendar with a list of exercises for each day. It allows user data status to be changed, with the ability to enter data on a daily basis.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Xamarin.Native                                </div>
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