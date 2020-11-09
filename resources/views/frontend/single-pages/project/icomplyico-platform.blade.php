
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/icomply-main.jpg')}}" width="1300" height="900"
                                                  alt="The iComplyICO"/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/ic1.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/ic2.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2018/07/ic3.jpg')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">iComplyICO Platform</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>The iComplyICO Prefacto Compliance Protocol is the world’s first and only solution to verify compliance on secondary trades over blockchain. </p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>Verifying each transaction at the protocol layer ensures that potential issuers are flagged and addressed ‘prefacto’, before the immutable trade occurs.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>iComplyICO’s Prefacto Compliance Protocol is currently available for the Ethereum blockchain.</p>
<p>Key features:</p>
<ul>
<li>Primary issuance. One stop: ID, KYC, AML, ATF, Blockchain Forensics;</li>
<li>Secondary trading. Transaction monitoring;</li>
<li>Issuer dashboard. Compliance maintenance.</li>
</ul>
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