
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/01/pa1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Pin App</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>Project codename “Pin app”.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Project codename “Pin app” – startup project that allows tourists ask locals for recommendations about places that would be fine to visit like the restaurants, hotels, historical places and places of interest, etc.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Pin app was developed with the most popular technologies and tools such as Xamarin, MvvmCross, iOS, Android, ASP.NET WebAPI v2, OAuth2, Xamarin Studio, MS Visual Studio, Issue tracker, Git, Trello and ReSharper.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin Forms, WEB API, Azure                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile                                </div>
                            </div>
                                                        <div class="shortcode-contact">
                                <div>Want to start a project? It’s simple. Contact us to discuss the details and we’ll tell you how we can help you.</div>
                                <a href="{{route('contact.us')}}" class="sc-link" target="" rel="">Contact Us</a>                            </div>
                                                    </div>
						                    </div>
				            </div>
        </div>
    </div>
    @endsection
