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
                                                                                                        <div><img src="{{ asset('frontend/wp-content/uploads/2017/10/lc2.jpg')}}" width="1300" height="900"
                                              alt=""/></div>
                                                                        <div><img src="{{ asset('frontend/wp-content/uploads/2017/10/lc3.jpg')}}" width="1300" height="900"
                                              alt=""/></div>
                                                                        <div><img src="{{ asset('frontend/wp-content/uploads/2017/10/lc4.jpg')}}" width="1300" height="900"
                                              alt=""/></div>
                                                                                            </div>
                        <div>
                            <h1 class="title-project">Lean-Case</h1>
                            <div class="text-project"></div>
                            <div class="text">
                                <div class="text-title"></div>
                                <p>One Business Case Portal for your entire company. Connect your company and customers to create, manage and track the right plans and gain insights.</p>
                                <div class="text-title-second">DURATION:</div>
                                <p>December 2016 – Present</p>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-910">
                        <div class="flex-text">
                            <div class="text">
                                <div class="text-title">Challenge</div>
                                <p>The main challenge was to develop a calculation engine responsible for automatic model calculation. We developed a magical engine some of one alternative to excel based on java programming language parried with Groove language.</p>
                            </div>
                            <div class="text">
                                <div class="text-title">Result achieved</div>
                                <p>Lean-Case is one of the few online resources to create your own startup projects. The website is designed to calculate the profitability of projects. The Lean-Case system was constructed in such a way that it takes into account all economic indicators so that its calculations are still accurate many years ahead.</p>
<p>Therefore, if customers enter maximum information they will obtain the most accurate results as to the effectiveness of the project. One of the advantages of<br />
Lean-Case is it’s ability to store large amounts of information about business performance.</p>
<ul>
<li>Plan growth smarter</li>
<li>Manage metrics better</li>
<li>Take decisions faster</li>
<li>Track progress smoother</li>
</ul>
                            </div>
                        </div>
                        <div class="project-data">
                            <div>
                                <div class="pd-title">CLIENT'S LOCATION:</div>
                                Germany                                </div>
                            <div>
                                <div class="pd-title">TECHNOLOGIES:</div>
                                Java, Spring Boot, Spring Data, Maven, MongoDB, <br>Groovy, Angular                                </div>
                            <div>
                                <div class="pd-title">PLATFORM:</div>
                                Web                                </div>
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