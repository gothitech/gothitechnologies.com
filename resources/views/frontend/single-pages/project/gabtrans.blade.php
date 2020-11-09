
@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_2.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_3.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_5.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_6.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_4.png')}}" width="1300" height="900"
                                                  alt=""/></div>
									                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/07/Screenshot_7.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Gabtrans</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>It is a payment system that customers can use to transfer money between bank accounts in countries like Nigeria, Kenya, and Ghana with very low commission fees. The banks of the listed countries formally support the platform through API.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>6 months</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>We had to implement several ways to transfer money:</p>
<ul>
<li>Cash Pickup</li>
<li>Bank Account</li>
<li>Credit Card.</li>
</ul>
<p>The system will be able to track each transaction, transaction status, customer account, and recipient profile (which can be used repeatedly).</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>The dashboard displays the user account&#8217;s basic data. There is an option to choose the country to which money will be transferred and to specify the amount.</p>
<p>The transfer manager allows the user to choose a money transfer method, as well as accounts that have already been used for transactions. The user can view the transaction history, as well.</p>
<p>Users can choose either a single recipient or multiple recipients of transferred funds. They can also edit data: they can change a recipient, an amount, and/or a payment method.</p>
<p>The user can also view completed transactions, and if necessary, repeat them, or download transaction data in the PDF format.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									USA                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									ASP.NET Core, Xamarin.Native for iOS and Android                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									WEB, Mobile                                </div>
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