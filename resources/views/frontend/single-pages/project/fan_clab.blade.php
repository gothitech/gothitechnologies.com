@extends('frontend.layouts.master')
@section('content')

<div class="menu-icon">
    <span></span>
    <span></span>
    <span></span>
</div>
</div>		</div>
</div>
</header>
<div class="cont-block portfolio-content">
    <div class="fixed">
        <div class="fixed-1150">
                                <div class="cont-box">
                    <div class="flex-slider">
                        <div class="project-slider">
                        <div><img src="{{asset('frontend/wp-content/uploads/2019/01/fanclub1.jpg')}}" width="1300" height="900"
                                              alt="FanClub - invite fans"/></div>
                                                                        <div><img src="{{asset('frontend/wp-content/uploads/2017/10/fc2.jpg')}}" width="1300" height="900"
                                              alt=""/></div>
                                                                                            </div>
                        <div>
                            <h1 class="title-project">Fan Club</h1>
                            <div class="text-project"></div>
                            <div class="text">
                                <div class="text-title"></div>
                                <p>The purpose of this project is to develop a platform used by nonprofit organizations to conduct fundraising campaigns. </p>
                                <div class="text-title-second">DURATION:</div>
                                <p>December 2016 – Present</p>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-910">
                        <div class="flex-text">
                            <div class="text">
                                <div class="text-title">Challenge</div>
                                <p>The platform is based upon event-based fundraising.</p>
                            </div>
                            <div class="text">
                                <div class="text-title">Result achieved</div>
                                <p>The platform allows fundraising organizations to equip door-to-door sales persons with a mobile app which is used both to accept one-time contributions and to sell products and services. It has built-in payment process, multi-tenancy, admin panel and mobile APP for iOS and Android.</p>
                            </div>
                        </div>
                        <div class="project-data">
                            <div>
                                <div class="pd-title">CLIENT'S LOCATION:</div>
                                USA                                </div>
                            <div>
                                <div class="pd-title">TECHNOLOGIES:</div>
                                ASP MVC, C#, SQL, HTML, JavaScript, CSS, AngularJs                                </div>
                            <div>
                                <div class="pd-title">PLATFORM:</div>
                                Web, Mobile                                </div>
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