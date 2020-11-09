@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2020/03/2-1.png')}}/" width="1300" height="900"
                                                  alt="Self-Service Project Development"/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/03/3.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/03/4.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Self-Service Portal</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>It is a web portal that supports self-service capabilities engaging employees, and giving them access to control their own data. It plans, develops, & optimizes the Human Capital.<br />
Management to have streamlined HR function, thus making working process much easier for employees and their managers.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>1 month</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Our task was to create a new design for already existing portal, to make an interactive, modern and visually outstanding interface, as well as accessible and intuitive functionality.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>We achieved pleasant, easy-to-use and clean look of the portal, by decluttering unnecessary information, thus reducing the time it takes a user to make an action, and making it easier to reach the primary goal.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									Saudi Arabia                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Figma, Illustrator                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Web                                </div>
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