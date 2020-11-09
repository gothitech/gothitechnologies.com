
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2019/07/fp1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/fp2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Family Plan App</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>It is a mobile app allowing divorced parents to map out their time necessary to look after kids in common. Using the Family Plan App, divorced parents can make a schedule that organizes how their kids will spend time with each of them. </p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2018 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The objective of this app is to provide parents with the ability to allocate the time necessary to look after kids, schedule events using a calendar, and track events in the app&#8217;s activity history.</p>
<p>Additionally, the app would allow parents to schedule homework during the time spent with their kids and to share expenses for various activities.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>We have developed an environment in which parents can create profiles for their kids and “bind” those profiles to one of the parents.</p>
<p>We can create a category that highlights the distribution of funds and assign it to one of the parents. After that, we can create a payment request for both parent and child.</p>
<p>On the calendar page, we can create a particular event and swap for an individual kid. Consequently, each event for a particular kid is represented by colored points and icons in the calendar.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									React.Native, Node.js, HTML5/CSS                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile, WEB                                </div>
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