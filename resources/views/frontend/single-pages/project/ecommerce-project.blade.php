
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2020/03/1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/03/2-2.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/03/3-1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2020/03/4-1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">E-Commerce UI/UX Design</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>It is a an e-commerce platform where customers can search for, research, and purchase an expansive array of products available from multiple local stores and retailers. In addition to product information, search results display estimated delivery times for participating vendors.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Small businesses companies struggle to compete with large e-Commerce companies and to establish an online presence. 53% of U.S. consumers have abandoned an online purchase because of slow delivery times and expect a faster delivery option with a possibility of live tracking. </p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>There are three apps for different users: customers, retailers and drivers. We have created a simple and clear interface for platforms where online shoppers can easily find and buy products from local stores, sellers can upload their items online and keep track of their selling activity, and where drivers will filter and accept the preferable goods and get paid for the delivery. </p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Figma, Adobe Illustrator                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Web, Mobile                                </div>
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