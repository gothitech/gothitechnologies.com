@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/clubable1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/clubable2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Clubbable</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>This app is an industry-first self service appointment management solution. This project was developed for clubs and it gives people the opportunity to organize parties, communicate and meet with friends. Clubbable was implemented in Xamarin Forms and used Azure, authentication through Facebook and work with images (loading photo from album or from a camera).</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Product mission is to create accessibility to the exclusive nightlife for both VIP guests as well as for the party organizers; giving guests the opportunity to create their own perfect night out in a respectable and stress-free environment, where promoters are only able to contact clients when an offer is accepted.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Promoters and clubs are given a unique market overview, with exclusive prices and availability summary. All can be managed with a few clicks on your smartphone without ‘having to know someone, or leaving the ‘control’ for your night out in someone else’s hands.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin Forms, WEB API, Azure, iOS, Android                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Web, Mobile (Android, iOS)                                </div>
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