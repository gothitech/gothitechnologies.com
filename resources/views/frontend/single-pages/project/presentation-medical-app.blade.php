@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/01/hp1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/01/hp2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Presentation App for Medical Center</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>Users are able to open a presentation, which can be stored in HTML or in PDF format. Start a presentation, jump between pages and play video. Also, users are able to fill and submit a form after the presentation.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Auxiliary tool for familiarizing patients (potential clients) with the activities of the company and its products.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Product to see and share information about the company. This project also has a backend side which represents by web portal where admin can add or edit presentations, create forms for users, review answers and collect all the info, do a statistic of all answers.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin Forms, WEB API                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile (iOS)                                </div>
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