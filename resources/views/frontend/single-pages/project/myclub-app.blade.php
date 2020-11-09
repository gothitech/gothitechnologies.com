
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2019/01/mca1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">MyClub App</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>iOS and Android mobile application for fitness clubs members. Most of app’s design can be customized from server, so we don’t need to make new app version, only update design files on server. Apps are distributing to many Belgian fitness clubs.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Basic functions:</p>
<ul>
<li>Server-driven theme customization;</li>
<li>Performance GIF control;</li>
<li>Video displaying control;</li>
<li>Flyout (sidebar) menu.</li>
</ul>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Features of application:</p>
<ul>
<li>MVVMCROSS custom binders and converters;</li>
<li>RestSharp for requests;</li>
<li>SQLite for backend datastore.</li>
</ul>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin, MvvmCross, ASP.NET                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile (Android, iOS)                                </div>
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
