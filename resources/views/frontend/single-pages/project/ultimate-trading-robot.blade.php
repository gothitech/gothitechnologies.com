@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/12/utr2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/12/utr1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Ultimate Trading Robot</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>The FIFA artificial intelligence robot trader, called the “FIFA 18 Ultimate Trading Robot (UTR)” has just launched. It enables you to make coins at the click of a button, meaning you actually require no trading knowledge. </p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Develop a quality product based on concurrency approaches for automatic work in the market.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>So unlike all the Autobuyers and Autobidders out there, with the FIFA Ultimate Trading Robot you do not need to Search for players to trade.The algorithm inside the Ultimate Trading Robot searches the Market 100% automatically for random players with profit potential and bids on these players automatically until you win the auction.</p>
<p>After that it automatically relists it with a higher price. This will hopefully teach you which players will offer good profits, so you can further replicate the process yourself manually.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									Portugal                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Java 8, Maven, Jdbc, Sqlite, Concurency                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Web, Desktop                                </div>
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