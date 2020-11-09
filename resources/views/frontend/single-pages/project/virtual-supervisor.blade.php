@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/07/1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/07/2.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/07/3.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/07/4.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Virtual Supervisor</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>Virtual Supervisor’s location-based platform works seamlessly across team’s devices, from desktop in the office to mobile in the field. </p>
<p>This allows a team to collaborate efficiently with real-time chat, field notes, shared files and more — all stored within each unique job location.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The challenge was to create the ability to identify problems, provide faster solutions, document details, and store all information to a specific job location – all in one easy-to-use app.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>With Virtual Superviser you get faster problem solving, easy communication and file management, ability to increase first-time fix rate and reduce truck rolls, as well as easier collaboration and more satisfied customers.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									iOS                                </div>
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
