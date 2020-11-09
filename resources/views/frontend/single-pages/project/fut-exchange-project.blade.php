
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2019/01/futexchange.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">FUTExchange</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>World's First FIFA Ultimate Team Coins Player to Player Marketplace. There, you can both auction your own coins and look for someone else’s coins to buy. </p>
<p>Thanks to FUTExchange, you can make some money out of those extra coins you have or buy the amount that you need in order to get the players you’ve always wanted.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The main challenge was to develop a product which help exchange ea market coins on real money.We developed a server side of this project. Our main goal was working with ea market and provide mechanism which helps ea users to buy and sell fifa players directly to each other.</p>
<p>We used java concurrency approaches. Base of this project is design pattern- chain of responsibility.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Whether you want to buy or sell coins, the first thing you need to do is sign up at futexchange.com. Is directly from this domain that all the service is provided.</p>
<p>If you’ve tried buying coins at some point and got confused with the process or didn’t like the price, consider trying out FUT Exchange. As soon as you click ‘Buy’ it’s all settled in four simple steps. When choosing the amount of coins you want and its corresponding platform, you’re automatically given the lowest price available so you can proceed to checkout. After that you just have to fill in some information relatively to a card you don’t need and the coins are delivered to you.</p>
<p>Selling coins is a strategy used by many players who intend to save money to buy packs or even the game itself at the beginning of the following year. Whatever your motives might be, you might as well do that on FUTExchange.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									Portugal                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									Java, Maven, Hibernate, Postgres, Concurency                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Android, iOS, Web                                </div>
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