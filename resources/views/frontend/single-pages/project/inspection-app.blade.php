
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{ asset('frontend/wp-content/uploads/2019/01/insp1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Inspection APP</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>The inspection app with using iPad, iPhone or any other Android device.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The purpose of this project is to do an inspection in different areas with using your iPad, iPhone or any other Android device. </p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>The app works in offline mode and you have an ability to download a form from a server (WEB API and portal), then fill the form with all required information, make photos, add them to the form, edit photos or make a sketch, and sync that form on the web-portal. </p>
<p>Web portal itself analysis all the forms, creates reports, sends them by users and also calculates a statistics for all actions.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									ASP MVC, WebAPI, C#, SQL, JavaScript, <br>CSS, jQuery, Xamarin                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile, Web                                </div>
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