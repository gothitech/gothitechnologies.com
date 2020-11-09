@extends('frontend.layouts.master')
@section('content')
    <div class="cont-block portfolio-content">
        <div class="fixed">
            <div class="fixed-1150">
				                    <div class="cont-box">
                        <div class="flex-slider">
                            <div class="project-slider">
																	                                        <div><img src="{{asset('frontend/wp-content/uploads/2019/01/check-in-1.png')}}" width="1300" height="900"
                                                  alt=""/></div>
																	                            </div>
                            <div>
                                <h1 class="title-project">Check in App</h1>
                                <div class="text-project"></div>
                                <div class="text">
                                    <div class="text-title"></div>
									<p>UWP project for automation cards scanning with using “smart cards” and web-server. This system works on RP2 basis and on custom hardware components which our company designed and developed. Also this platform is flexible, so it can be used for any kind of fintess-centres.</p>
                                    <div class="text-title-second">DURATION:</div>
                                    <p>December 2016 – Present</p>
                                </div>
                            </div>
                        </div>
                        <div class="fixed-910">
                            <div class="flex-text">
                                <div class="text">
                                    <div class="text-title">Challenge</div>
									<p>The purpuse of this product is to keep tracking all the information from users in fitness center, also keep tracking user’s activity, aditional payments, and payments in fitness-bar.</p>
                                </div>
                                <div class="text">
                                    <div class="text-title">Result achieved</div>
									<p>It was decided to separate user interface development and code behind. So, we used MVVM (Light) technology for it. Changes in the user interface do not directly affect the Model, but go through the Controller or Presenter in advance. There is the concept of “data binding,” which allows linking data with visual elements in both directions.</p>
<p>We connected different types of smart card readers to application. So, using smart cards is an easy and fast way of receiving user’s information without any passwords.</p>
<p>Also, we created UI and code behind application which allows to have easy development process for designers and programmers. Then user can change some info, book trainings or view his schedule. Also user can create program of trainings, edit or delete it. All icons are animated. Possibility of reviewing all training of user’s group is available too.</p>
                                </div>
                            </div>
                            <div class="project-data">
                                <div>
                                    <div class="pd-title">CLIENT'S LOCATION:</div>
									United Kingdom                                </div>
                                <div>
                                    <div class="pd-title">TECHNOLOGIES:</div>
									UWP,C#, XAML, MVVM                                </div>
                                <div>
                                    <div class="pd-title">PLATFORM:</div>
									Mobile                                </div>
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
