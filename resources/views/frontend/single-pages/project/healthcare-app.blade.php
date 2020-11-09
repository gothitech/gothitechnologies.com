
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/hl_4.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/hl_2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/hl_1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/hl_3.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Healthcare Mobile App</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>Healthcare mobile app/web-portal. Purpose of this project was to develop a healthcare mobile app as well as web-portal where users will be able to track their blood pressure, health indicators, appointments, do a statistic of every part of measurement. Also this application can predict some risks in health indicators and send notification messages.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Create a friendly, efficient environment for the diagnosis and treatment of low testosterone in men.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Low T Center is designed so men can walk in, take a quick blood test, and know whether or not testosterone therapy is right for them in about 20 minutes. Next, a licensed clinician will work with them to develop a plan tailored specifically for them. After consultation with their care provider, many men elect to begin therapy that same day. After the initial visit, a typical follow-up takes 15 minutes or less.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									WEB API, C#, .NET, Xamarin Android, AWS                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile (Android), Web                                </div>
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