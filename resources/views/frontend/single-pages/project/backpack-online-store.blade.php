@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
                            <div><img src="{{asset('frontend/wp-content/uploads/2020/03/bagpack-store.jpg')}}" width="1300" height="900"
                                                  alt="Bagpack Store ecommerce project"/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Backpack Online Store</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>A multi-brand online store specializing in selling backpacks. The catalog features models of worldwide renowned manufacturers, and one can choose any model for any purpose, starting from travel-models and finishing with specialized backpacks for photographers.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>2 month</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>We meticulously thought out website architecture and placed special emphasis on usability quality. Our team focused on user friendliness and performance optimization to ensure website high-speed operation.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>Besides the classic features for online stores, the Gothi Technologies Limited team implemented the following features as part of this project:</p>
<ul>
<li>advanced user profile (wishlist, order history, etc.);</li>
<li>convenient system of product filters in the catalog according to properties;</li>
<li>customizable website administration panel;</li>
<li>advanced capabilities for SEO optimization, etc.</li>
</ul>
<p>We also have to note a pleasant minimalistic design, which improves information readability and focuses user attention on the most important things. This approach has a positive impact on the conversion rate and assists the business in increasing profits.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									C#, Xamarin                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									iOS, Android                                </div>
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