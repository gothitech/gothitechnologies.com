@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/cwallet1.jpg')}}" width="1300" height="900"
                                                  alt="Cryptocurrency Wallet App (screens)"/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Cryptocurrency Wallet</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>Access your account, accept payments in person, and convert coins anywhere.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Like a bank account it contains transactions from one wallet to another. This wallet support almost all the popular cryptocurrencies.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>This digital wallet created for receiving money for job done and paying for trainings within job-platform. The money which is stored in Coinpayments wallet is acceptable by hundreds and thousands of online stores for shopping purpose.</p>
<p>Each detailed transaction displayed and tracked.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin Forms, WEB API, Azure                                </div>
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