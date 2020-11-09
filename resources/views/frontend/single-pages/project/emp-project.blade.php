
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('fronted/wp-content/uploads/2019/07/Frame1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('fronted/wp-content/uploads/2019/07/Frame-2.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('fronted/wp-content/uploads/2019/07/Frame-3.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('fronted/wp-content/uploads/2019/07/Frame-4.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('fronted/wp-content/uploads/2019/07/Frame-5.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">EMP Project</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>This is an enterprise website for company employees engaged in the manufacturing of parts and components for industrial machines and machine servicing.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>5 months</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Our task was to develop an online service for warehouse stock accounting, as well as machinery maintenance and depreciation calculation.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>The platform includes the database, which describes technical specifications of parts, their locations, and relevant media data. The platform shows each specifications for each specific part and allows them to be changed.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									ASP.NET Core2, Angular, SQL Server                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									WEB                                </div>
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