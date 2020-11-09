
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/06/imyra3.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/06/imyra1.jpg')}}" width="1300" height="900"
                                                  alt="iMYRA app"/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/06/imyra2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">iMYRA (real estate app)</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>The name iMYRA means “I Manage Your Real Estate Activity”. The whole idea behind this project is yo make your life easier by combining many of the tasks you use in several separate applications or programs into one location – iMYRA’s capable hands.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The purpose of this application is to provide the mobile and web-app where user will be able to do and apply an inspection for apartments and different buildings.</p>
<p>This app has the ability to create any kind of form for the inspection, do a reports, sync between client-server.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>We know how difficult it is to manage your business every day. You have a highly stressful job requiring you to manage a growing list of clients, customers and leads converting them all into happy clients. There had to be a better way to help you become more efficient and productive without burying you in more applications and processes.</p>
<p>With help of iMYRA you can manage all your processes in one place: creating contacts with all needed information, creating Home Evaluations, send reports for better communication with the client, create contracts, have access to latest real estate news and have detailed notification process to keep you posted bout all important things.</p>
<p>iMYRA would truly be the assistant you need to help you be more successful and stress free.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									ASP.NET MVC, ASP.NET MVC Zero, Angular 5, <br>Xamarin, C#, .NET, SQL Server                                </div>
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